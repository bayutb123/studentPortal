<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'passwords',
        'birthplace',
        'birthday',
        'address',
        'city',
        'phone',
        'province',
        'gender',
        'religion',
    ];
}
