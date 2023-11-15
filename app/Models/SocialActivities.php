<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialActivities extends Model
{
    use HasFactory;

    public $table = 'social_activities';
    protected $fillable = [
        'name',
        'description',
        'date',
    ];
}
