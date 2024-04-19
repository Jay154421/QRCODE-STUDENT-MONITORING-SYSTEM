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
        // 'username',
        // 'password'
    ];

    public function logs()
    {
        return $this->hasMany(Logs::class, 'idnumber', 'id_student');
    }

    // In your Student model
    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }


    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
