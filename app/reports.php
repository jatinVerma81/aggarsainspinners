<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    protected $fillable = [
        'title',
        'path',
        'type'     
    ];
}
