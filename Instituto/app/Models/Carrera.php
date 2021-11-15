<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sede;
use App\Models\Materia;

class Carrera extends Model
{
    use HasFactory;

    public $table = "carreras";

    // Hago referencia a que una carrera pertenece a una sede
    public function sedes(){
    	return $this->belongsTo('App\Models\Sede', 'SedeId');
    }
    public function sedesOption1(){
        return $this->belongsTo('App\Models\Sede', 'SedeOptional1Id');
    }
    public function sedesOption2(){
        return $this->belongsTo('App\Models\Sede', 'SedeOptional2Id');
    }

    // Hago referencia a que una carrera tiene muchas materias
    public function materias(){
        return $this->belongsTo('App\Models\Materia');
    }

    // Relación para la tabla de finales
    public function finales(){
        return $this->hasMany('App\Models\finales');
    }

    protected $fillable = [
    	'CarreraDn',
    	'CarreraAnios',
    	'CarreraResolucion',
    	'SedeId',
        'SedeOptional1Id',
        'SedeOptional2Id',
    ];
}
