<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    protected $fillable = ['name', 'manager', 'stadion', 'location', 'league'];
}
