<?php

namespace AppGolf;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = "modulos";

    protected $fillable = ['nombre', 'numero'];
    
}
