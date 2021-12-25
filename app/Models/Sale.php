<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id','sale_quantity','sale_price'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}