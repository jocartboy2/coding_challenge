<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    // set table name
    public $table = 'events';

    protected $fillable = [
        'event', 'from', 'to','days'
    ];
}
