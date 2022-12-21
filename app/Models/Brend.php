<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brend extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'photo',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'link',
        'brend_number',
        'slug',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
