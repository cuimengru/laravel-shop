<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCartRequest;
use App\Models\ProductSku;
use App\Services\CartService;

class CartController extends Controller
{
    protected $cartService;


    // 利用 Laravel 的自动解析功能注入 CartService 类
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    //查看购物车
    public function index(Request $request)
    {
        //with(['productSku.product']) 方法用来预加载购物车里的商品和 SKU 信息
        //$cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();
        $cartItems = $this->cartService->get();
        //收货地址
        $addresses = $request->user()->addresses()->orderBy('last_used_at', 'desc')->get();
        return view('cart.index', ['cartItems' => $cartItems,'addresses' => $addresses]);
    }

    //添加商品到购物车
    public function add(AddCartRequest $request)
    {
        /*$user = $request->user();
        $skuId = $request->input('sku_id');
        $amount = $request->input('amount');

        //从数据库中查询该商品是否已经在购物车中
        if($cart = $user->cartItems()->where('product_sku_id',$skuId)->first()){
            //如果存在则直接叠加商品数量
            $cart->update([
                'amount' => $cart->amount + $amount,
            ]);
        }else{
            //否则创建一个新的购物车记录
            $cart = new CartItem(['amount' => $amount]);
            $cart->user()->associate($user);
            $cart->productSku()->associate($skuId);
            $cart->save();
        }*/
        $this->cartService->add($request->input('sku_id'), $request->input('amount'));
        return [];
    }

    //移除购物车中的商品
    public function remove(ProductSku $sku,Request $request){
        $this->cartService->remove($sku->id);
        return [];
    }


}
