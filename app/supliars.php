<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supliars extends Model
{
    protected $table = 'supliars';
    protected $fillable =[
           'name',
           'email',
           'mobile',
           'address',
           'status',
    ];
}
