<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  protected $fillable = ['id','name', 'price', 'user', 'category', 'picture','creationDate'];
    protected $primaryKey = 'id';
    protected $table = 'products';
    public $timestamps = false;
    use HasFactory;
}