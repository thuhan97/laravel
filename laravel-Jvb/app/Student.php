<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
   protected $table = "student";
   protected $fillable = [
        'name', 'gender','faculty','birthday_year'
    ];
    public $timestamps=false;
    
}
