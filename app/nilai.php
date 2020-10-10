<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
     protected $fillable = [
    'noinduk', 'nama', 'semester', 'matapelajaran', 'tugas1', 'tugas2', 'tugas3', 'UTS', 'UAS',
   	];
}
