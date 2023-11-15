<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    use HasFactory;

    public $table = 'commitment';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
    ];
}
