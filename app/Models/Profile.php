<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public $table = 'profile';

    protected $fillable = [
        'name',
        'title_landing_page',
        'title_profile_page',
        'description_landing_page',
        'description_profile_page',
        'photo_landing_page',
        'photo_profile_page',
        'photo_faq_page',
        'photo_socmed',
        'photo_educations',
        'photo_experiences',
        'photo_organizations',
        'photo_social_activities',
        'photo_profile_on_landing',
    ];
}
