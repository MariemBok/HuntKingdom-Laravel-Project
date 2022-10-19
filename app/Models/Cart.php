<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $fillable =
        ['id',
            'name',
            'phone',
            'email',
            'address',
            'product_title' ,
            'price',
            'quantity',
            'image',
            'product_id',
            'user_id'];
    use HasFactory;
}
