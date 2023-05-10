<?php

namespace App\Models;

use App\Models\Product;
use App\Models\OrderAddress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function address()
    {
        return $this->hasMany(OrderAddress::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
