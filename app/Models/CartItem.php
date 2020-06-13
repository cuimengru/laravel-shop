<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //
    protected $fillable = ['amount'];
    public $timestamps = false;

    //关联用户表
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //关联sku
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}
