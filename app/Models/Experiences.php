<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experiences extends Model
{
    use HasFactory;

    public $table = 'experiences';

    protected $fillable = [
        'company_name',
        'position',
        'start_date',
        'end_date',
    ];
}
