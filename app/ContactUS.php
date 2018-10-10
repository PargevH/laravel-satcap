<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{

    public $table = 'contactus';

    public $fillable = ['firstName', 'lastName', 'email', 'phone', 'companyName', 'accredited', 'message'];

}