<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorys extends Model
{
    protected $table ='categorys';

    protected $fillable =['name','status'];
}
