<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //商品列表页
    public function index(Request $request){

        //where('on_sale', true) 筛选出 on_sale 字段为 true 的记录，这样未上架的商品就不会被展示出来
        $products = Product::query()->where('on_sale', true)->paginate(16);

        return view('products.index', ['products' => $products]);
    }

}
