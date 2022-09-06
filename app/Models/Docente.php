<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'docentes';

    protected $fillable = ['apellido','nombres','dni','titulo','fecha_ingreso','celular','mail','obs'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actas()
    {
        return $this->hasMany('App\Models\Acta', 'id_docente_p', 'id');
    }
    
}
