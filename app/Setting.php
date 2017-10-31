<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /* public $primaryKey = 'key'; */

    public $timestamps = false;

    protected $fillable = [
        'key', 'display_name', 'value',
    ];
}
