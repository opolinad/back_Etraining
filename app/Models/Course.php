<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $primaryKey = 'id';
    protected $fillable = ['Nombre', 'Fecha_de_inicio_del_curso', 'Fecha_Fin_del_curso'];
}
