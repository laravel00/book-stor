<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invois extends Model
{
    use HasFactory;
    public function order()
    {
     return $this->hasOne(Order::class);
    }
}
