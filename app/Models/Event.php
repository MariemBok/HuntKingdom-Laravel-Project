<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'startDate',
        'time',
        'nbrMax',
        'location',
        'organizer',
        'picture',
        'creationDate',
    ];
    protected $primaryKey = 'id';
    protected $table = 'events';
    public $timestamps = false;
    use HasFactory;
}
