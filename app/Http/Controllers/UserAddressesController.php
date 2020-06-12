<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    //地址列表页
    public function index(Request $request)
    {
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }
}
