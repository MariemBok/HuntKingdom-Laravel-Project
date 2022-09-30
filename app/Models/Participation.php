<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    
    protected $fillable = ['id','participant','event', 'creationDate'];
    protected $primaryKey = 'id';
    protected $table = 'participations';
    public $timestamps = false;
    use HasFactory;
}
