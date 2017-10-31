<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'image', 'name', 'code', 'details', 'price', 'start', 'end',
    ];
}
