<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addressbook extends Model
{
    //
        protected $fillable = [
        'first_name','last_name', 'email','number',
    ];
}
