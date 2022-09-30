<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = ['id','description', 'startDate', 'endDate', 'duration', 'nbrMax','location','organizer', 'creationDate'];
    protected $primaryKey = 'id';
    protected $table = 'events';
    public $timestamps = false;
    use HasFactory;
}
