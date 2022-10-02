<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{

    protected $fillable = ['id','name', 'creationDate','description'];
    protected $primaryKey = 'id';
    protected $table = 'category_products';
    public $timestamps = false;
    use HasFactory;
}
