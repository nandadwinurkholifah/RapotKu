<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $fillable = [
    	'kode', 'matapelajaran', 'pengajar'
    ];
}
