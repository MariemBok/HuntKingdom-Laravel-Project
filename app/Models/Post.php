<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['id','title','content', 'user', 'category', 'image', 'creationDate'];
    protected $primaryKey = 'id';
    protected $table = 'posts';
    public $timestamps = false;
    use HasFactory;
}
