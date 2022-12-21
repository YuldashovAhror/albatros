<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'info_cat_id',
        'name_uz',
        'name_ru',
        'name_en',
        'info_photo',
        'presentation_photo',
        'link',
        'slug',
    ];

    public function infocategories()
    {
        return $this->belongsTo(InfoCategory::class, 'info_cat_id');
    }
}
