<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    public $table = "divisiones";

    public function finales(){
    	return $this->hasMany('App\Models\finales');
    }

    protected $fillable = [
    	'Division',
    ];
}
