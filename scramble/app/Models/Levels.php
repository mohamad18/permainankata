<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    //
    protected $table = 'level';

    protected $fillable = [
         'id', 'level', 'desc'
    ]; 
}
