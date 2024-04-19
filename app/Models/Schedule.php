<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subjcode',
        'section',
        'description',
        'schedule',
        'unit',
    ];

    // public function students()
    // {
    //     return $this->hasMany(Schedule::class);
    // }
}
