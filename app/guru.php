<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
   protected $fillable = [
    	'nip', 'nama','jeniskelamin' ,'telepon'
    ];
}
