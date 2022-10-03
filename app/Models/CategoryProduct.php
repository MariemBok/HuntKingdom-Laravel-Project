<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table = 'category_products';
    protected $fillable = ['name', 'description','creationDate'];

   //public mixed $description;
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function products(){
        return $this->hasMany(Product::class,'category','id');
    }
}
