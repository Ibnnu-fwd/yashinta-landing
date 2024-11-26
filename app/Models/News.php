<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $table = 'news';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'author',
        'commitment_id',
        'tag',
        'category',
        'published_date',
    ];

    public function commitmentRelated()
    {
        return $this->belongsTo(Commitment::class, 'commitment_id');
    }
}
