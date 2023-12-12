<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

   protected $fillable = ['name', 'address', 'city', 'phone', 'bio'];
 public function user()
{
    return $this->belongsTo(User::class);
}

 public function requests()
{
    return $this->hasMany(Request::class);
}

         public function orders()
{
    return $this->hasMany(Order::class);
}

public function posts()
{
    return $this->morphMany(Post::class, 'postable');
}

}
