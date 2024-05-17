<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'idnumber',
        'name',
        'gender',
        'age',
        'year',
        'course',
        'address',
        'parent',
        'parent_id'
        // 'username',
        // 'password'
    ];

    public function logs()
    {
        return $this->hasMany(Logs::class, 'idnumber', 'id_student');
    }

    public function parent()
    {
        return $this->belongsTo(Parent::class, 'parent_id');
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
