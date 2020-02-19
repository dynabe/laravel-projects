<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shorts extends Model
{
    protected $fillable = [
        'link',
        'short'
    ];
}
