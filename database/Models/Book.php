<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
   // protected $table="books";
    
    public function categuore()
    {
     return $this->belongsTo(Categuores::class);
    }
    public function orders()
    {
     return $this->hasMany(Order::class ,'book_id');
    }
}
