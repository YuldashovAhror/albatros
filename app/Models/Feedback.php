<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'file',
    ];

    public function products()
    {
        return $this->belongsTo(ProjectStatus::class, 'product_id');
    }
}
