<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'vacancy_id',
        'number',
        'name',
        'file',
    ];

    public function vacancies()
    {
        return $this->belongsTo(Vacancy::class, 'vacancy_id');
    }
}
