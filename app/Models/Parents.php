<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Parents extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'gender',
        'age',
        'address',
        'phone',
        // 'username',
        // 'password'
    ];
}
