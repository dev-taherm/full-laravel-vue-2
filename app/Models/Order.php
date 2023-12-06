<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

     protected $fillable = [
        'titel',
        'descriptions',
        'price',
        'status',
    ];



         public function customer()
{
    return $this->belongsTo(Customer::class);
}

         public function service()
{
    return $this->belongsTo(Service::class);
}
}
