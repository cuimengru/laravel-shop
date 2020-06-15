<?php

Route::redirect('/', '/products')->name('root');
//商品列表页
Route::get('products', 'ProductsController@index')->name('products.index');


// 在之前的路由里加上一个 verify 参数,邮箱验证
Auth::routes(['verify' => true]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    //收货地址列表
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    //增加收货地址
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    //增加收货地址的方法
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    //修改收货地址的页面
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    //修改收货地址的方法
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    //删除收货地址
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
    //收藏商品
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    //取消收藏
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    //收藏列表
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
    //添加购物车
    Route::post('cart', 'CartController@add')->name('cart.add');
    //查看购物车列表
    Route::get('cart', 'CartController@index')->name('cart.index');
    //移除购物车中的商品
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
    //订单方法
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    //订单列表
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    //订单详情页
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
    //支付宝页面
    Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
    //支付宝前端回调
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
    //微信支付
    Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');
    //发货状态
    Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
    //评价商品
    Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
    Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');
    //提交退款申请
    Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');
    Route::post('payment/wechat/refund_notify', 'PaymentController@wechatRefundNotify')->name('payment.wechat.refund_notify');

});
//支付宝服务器端回调
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
//微信回调
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');
//商品详情页
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

