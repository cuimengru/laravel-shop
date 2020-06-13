<?php

Route::redirect('/', '/products')->name('root');
//商品列表页
Route::get('products', 'ProductsController@index')->name('products.index');
//商品详情页
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

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
});
