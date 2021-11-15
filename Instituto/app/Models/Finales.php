<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finales extends Model
{
    use HasFactory;

    public $table = "finales";

    // Hago cada una de las relaciones
    public function sedes(){//Para las sedes 
    	return $this->belongsTo('App\Models\Sede', 'SedeId');
    }

    // Para la tabla de carreras 
    public function carreras(){
    	return $this->belongsTo('App\Models\Carrera', 'CarreraId');
    }

    // Para la tabla de divisiones
    public function divisiones(){
    	return $this->belongsTo('App\Models\Division', 'DivisionId');
    }

    // Para la tabla de materias
    public function materias(){
    	return $this->belongsTo('App\Models\Materia', 'MateriaId');
    }

    // Para la tabla de llamados
    public function llamados(){
    	return $this->belongsTo('App\Models\Llamado', 'Llamado_id');
    }

    // Para la tabla de profesores
    public function profesorTitular(){
    	return $this->belongsTo('App\Models\Profesor', 'ProfesorId');
    }
    public function profesorVocal1(){
        return $this->belongsTo('App\Models\Profesor', 'ProfesorVocal_id');
    }
    public function profesorVocal2(){
        return $this->belongsTo('App\Models\Profesor', 'ProfesorOptativo_id');
    }

    protected $fillable = [
    	'SedeId',
    	'CarreraID',
    	'DivisionId',
    	'AnioId',
    	'MateriaId',
    	'ProfesorId',
    	'ProfesorVocal_id',
    	'ProfesorOptativo_id',
    	'Llamado_id',
    	'Fecha',
    ];
}
