<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Product;
use App\Models\ProductSizePrice;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showProduct($slug)
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $subCategory = SubCategory::where('slug', $slug)->first();
        $product = Product::with('media')->where('sub_category_id', $subCategory->id)->get();
        return view('shop.product', compact('mainCategory', 'subCategory', 'product'));
    }

    public function showSingleProduct($slug)
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $subCategory = Product::with('media')->where('slug', $slug)->first();
        $product = Product::with('productsizeprice')->where('id', $subCategory->id)->first();
        $size = Size::all();
        return view('shop.single_product', compact('mainCategory', 'subCategory', 'product', 'size'));
    }

    public function getPrice(Request $request)
    {
        $sizeId = $request->size_id;
        $productSizePrice = ProductSizePrice::where('size_id', $sizeId)->first();
        if ($productSizePrice->product_stock == 0) {
            return response()->json([
                'price' => $productSizePrice->price,
                'stock' => 'OUT OF STOCK',
            ]);
        } else {
            return response()->json([
                'price' => $productSizePrice->price,
                'stock' => "IN STOCK",
            ]);
        }
    }
}