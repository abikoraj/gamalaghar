<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Order;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request){
        try {

            $province = $request->input('province_id');
            $city = $request->input('city_id');
            $area = $request->input('area_id');

            // Retrieve province, city, and area names from their respective models
            $provinceName = Province::find($province)->province;
            $cityName = City::find($city)->city;
            $areaName = Area::find($area)->area;

            $shippingAddress = "$provinceName, $cityName, $areaName";

            $order=DB::transaction(function() use($request, $shippingAddress) {
                $order= Order::create([
                    'user_id'=>auth()->user()->id,
                    'order_number'=>$request->order_number,
                    'fullname'=>$request->fullname,
                    'address'=>$request->address,
                    'shipping_address'=>$shippingAddress,
                    'sub_total'=>$request->sub_total,
                    'delivery_charge'=>$request->delivery_charge,
                    'total_amount'=>$request->total_amount,
                    'order-status'=>'Pending',
                ]);
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
