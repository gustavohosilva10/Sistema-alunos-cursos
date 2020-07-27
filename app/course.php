<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = "course";
    public $timestamps = false;
    public $fillable = [

        'name',

    ];

}
