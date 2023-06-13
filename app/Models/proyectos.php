<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class proyectos extends Model
{
    use HasFactory;
    // protected $table = 'curso_esit.proyectos';

    protected $fillable = [
        'NombreProyecto',
        'UrlLogo',
        'FuenteFondos',
        'descripcion',
        'MontoPlanificado',
        'MontoPatrocinado',
        'MontoFondosPropios',
        'FechaInicio',
        'FechaFin',
        'Created_at',
        'Updated_at',
    ];


    public function formatDate($value){
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function dateForInput($value){
        return Carbon::parse($value)->toDateString();
    }

}
