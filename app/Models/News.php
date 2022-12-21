<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'new_cat_id',
        'date',
        'photo',
        'title_uz',
        'title_ru',
        'title_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'photo_2',
        'link',
        'slug',
    ];

    public function newscategories()
    {
        return $this->belongsTo(NewsCategory::class, 'new_cat_id');
    }
}
