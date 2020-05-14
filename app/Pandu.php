<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pandu extends Model
{
    //
	protected $table = 'pandu';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'nama',
    	'umur',
	];
}
