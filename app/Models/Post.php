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


    public function category() {
        return $this->belongsTo('App\Models\Post');
    }
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
