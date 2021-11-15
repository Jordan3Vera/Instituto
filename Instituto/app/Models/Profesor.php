<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    public $table = "profesores";

    // Relación para la tabla de finales
    public function finales(){
    	return $this->hasMany('App\Models\finales');
    }

    public function scopeProfesors($query, $name){
        if($name){
            return $query->where('profesor', 'LIKE', "$name");
        }
    }

    protected $fillable = [
    	'ProfesorApellido',
    	'ProfesorNombre',
    ];
}
