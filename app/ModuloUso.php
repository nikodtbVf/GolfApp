<?php

namespace AppGolf;

use Illuminate\Database\Eloquent\Model;

class ModuloUso extends Model
{
    protected $table = "modulo_usos";

    protected $fillable = ['user_id', 'modulo_id','init_time','end_time','status'];
}
