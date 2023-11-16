<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    use HasFactory;

    public $table = 'aspiration';

    protected $fillable = [
        'name',
        'phone_number',
        'city',
        'message',
    ];
}
