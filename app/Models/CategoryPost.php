<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{

    protected $fillable = ['id','name', 'creationDate'];
    protected $primaryKey = 'id';
    protected $table = 'category_posts';
    public $timestamps = false;
    use HasFactory;
    public function posts(){
        return $this->hasMany(Post::class,'category','id');
    }
}
