<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'alumnos';

    protected $fillable = ['apellido','nombres','dni','fecha_nac','calle','numero','manzana','casa','depto','barrio','cp','ciudad','provincia','celular','mail','obs','baja','genero'];
	
}
