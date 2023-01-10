<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'photo',
        'slug',
    ];

    public function informations()
    {
        return $this->hasMany(Information::class, 'info_cat_id');
    }
}
