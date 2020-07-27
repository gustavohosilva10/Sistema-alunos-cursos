<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{   
    
    protected $table = "students";
    public $timestamps = false;
    public $fillable = [
        'name',
        'avatar',
        'status', 
        'zip_code',
        'address',
        'complement',
        'strict',
        'city',
        'state',
        'gender',
    ]; 
}
