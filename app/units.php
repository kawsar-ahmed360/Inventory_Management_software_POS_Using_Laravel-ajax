<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class units extends Model
{
    protected $table = 'units';
    protected $fillable = ['name','status'];
}
