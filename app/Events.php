<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
         protected $fillable = [
        'title','description', 'start_date','start_time', 'end_date','end_time',
    ];
}
