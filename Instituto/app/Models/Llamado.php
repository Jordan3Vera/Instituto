<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamado extends Model
{
    use HasFactory;

    public $table = "llamados";

    // Relación para la tabla de finales
    public function finales(){
    	return $this->hasMany('App\Models\finales');
    }

    protected $fillable = [
    	'Llamado',
    ];
}
