<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Materia extends Model
{
    use HasFactory;

    public $table = "materias";

    // Hago referencia a que esa materia pertenece a una carrera
    public function carreras(){
    	return $this->belongsTo('App\Models\Carrera', 'id');
    }

    // Relación para la tabla de finales
    public function finales(){
        return $this->hasMany('App\Models\finales');
    }

    protected $fillable = [
    	'MateriaDn',
    	'CarreraId',
    	'Anio',
    ];
}
