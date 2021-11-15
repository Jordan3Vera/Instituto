<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    use HasFactory;

    public $table = 'datos_users';

    protected $fillable = [
    	'age',
    	'date',
    	'sex',
    	'country',
    	'province',
    	'city',
    	'home',
    	'civil_status'
    ];
}
