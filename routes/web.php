<?php

Route::get('/', 'PagesController@root')->name('root');

// 在之前的路由里加上一个 verify 参数,邮箱验证
Auth::routes(['verify' => true]);
