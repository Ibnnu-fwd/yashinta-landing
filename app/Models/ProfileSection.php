<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSection extends Model
{
    use HasFactory;

    public $table = 'profile_section';

    protected $fillable = [
        'title',
        'quotes',
        'image',
        'content'
    ];
}
