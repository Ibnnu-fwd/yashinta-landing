<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    public $table = 'agenda';

    protected $fillable = [
        'title',
        'location',
        'color',
        'start_date',
        'start_time',
        'end_date',
        'end_time'
    ];
}
