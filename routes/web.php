<?php

Route::get('/', 'PagesController@root')->name('root');

// 在之前的路由里加上一个 verify 参数,邮箱验证
Auth::routes(['verify' => true]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    //收货地址列表
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
});
