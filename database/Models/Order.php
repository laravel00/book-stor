<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function book()
    {
     return $this->belongsTo(Book::class);
    }
    public function coustomers()
    {
     return $this->belongsTo(Coustomer::class);
    }
    public function invoice()
    {
     return $this->belongsTo(Invois::class);
    }
}
