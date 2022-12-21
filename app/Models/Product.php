<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'photo',
        'name_uz',
        'name_ru',
        'name_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'instruct_photo',
        'characteristic_uz',
        'characteristic_ru',
        'characteristic_en',
        'link',
        'slug',
    ];

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
