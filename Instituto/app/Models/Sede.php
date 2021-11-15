<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Sede extends Model
{
    use HasFactory;

    public $table="sedes";

    // Hago referencia a que una sede tiene muchas carreras
    public function carreras(){
    	return $this->hasMany('App\Models\Carrera');
    }

    // Relación para la tabla de finales
    public function finales(){
        return $this->hasMany('App\Models\finales');
    }

    protected $fillable = [
        // 'SedeImagen',
    	'SedeDn',
    	'SedeDireCalle',
    	'SedeDireAltura',
    ];
}
