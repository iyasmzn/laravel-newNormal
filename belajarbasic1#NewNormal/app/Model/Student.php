<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'gender', 'nis', 'class', 'address', 'birth_date', 'departement', 'height', 'weight', 'guardians_id',
    ];
}
