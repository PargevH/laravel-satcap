<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    public $table = 'subscribe';

    protected $fillable = [
        'email',
    ];
}
