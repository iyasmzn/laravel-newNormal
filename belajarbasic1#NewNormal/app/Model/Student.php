<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'gender', 'nis', 'class', 'address', 'birth_date', 'major', 'height', 'weight', 'guardian_id',
    ];
    public function guardian()
    {
        return $this->belongsTo('App\Model\Guardian');
    }
}
