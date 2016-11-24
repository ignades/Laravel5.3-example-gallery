<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
protected $table='usuarios';
protected $primarykey='id';

protected $fillable =['id','nombre','email'];
}
