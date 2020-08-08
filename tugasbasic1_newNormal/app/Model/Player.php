<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    protected $fillable = ['name', 'gender', 'age', 'height', 'club_id'];
    public function club()
    {
        return $this->belongsTo('App\Model\Club');
    }
}
