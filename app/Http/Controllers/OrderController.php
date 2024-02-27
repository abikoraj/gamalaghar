<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Province;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        try {
            $city = $request->input('city_id');
            $area = $request->input('area_id');
            // Retrieve province, city, and area names from their respective models
            $provinceName = Province::find($request->province_id);
            $cityName = City::find($city)->city;
            $areaName = Area::find($area)->area;
            $order = DB::transaction(function () use ($request, $provinceName, $cityName, $areaName) {
                $order = Order::create([
                    'user_id' => auth()->user()->id,
                    'order_number' => Str::upper(Carbon::now()->format('Yd') . Str::random(5)),
                    'fullname' => $request->fullname,
                    'province' => $provinceName->province,
                    'city' => $cityName,
                    'area' => $areaName,
                    'sub_total' => $request->sub_total,
                    'delivery_charge' => $request->delivery_charge,
                    'total_amount' => $request->total_amount,
                    'order_status' => 'Pending',
                ]);
                $size = $request->input('size');
                $price = $request->input('price');
                $product_name = $request->input('product_name');
                $product_id = $request->input('product_id');
                // Loop through the arrays and save each product
                for (
                    $i = 0;
                    $i < count($size);
                    $i++
                ) {
                    $orderItem = new OrderItem();
                    $orderItem->user_id = auth()->user()->id;
                    $orderItem->order_id = $order->id;
                    $orderItem->size = $size[$i];
                    $orderItem->product_name = $product_name[$i];
                    $orderItem->price = $price[$i];
                    $orderItem->product_id = $product_id[$i];
                    $orderItem->save();
                }
                return $order;
            });
            if ($order) {
                return back()->with('success', 'Your Order is Placed!!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
