<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    //允许修改的字段
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    protected $dates = ['last_used_at'];
    protected $appends = ['full_address'];
    //关联user表，一个地址只属于一个用户
    public function user(){
        return $this->belongsTo(User::class);
    }

    //省市区地址拼接
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
