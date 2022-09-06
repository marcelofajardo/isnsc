<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Alumno;

class Alumnos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $apellido, $nombres, $dni, $fecha_nac, $calle, $numero, $manzana, $casa, $depto, $barrio, $cp, $ciudad, $provincia, $celular, $mail, $obs, $baja, $genero;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.alumnos.view', [
            'alumnos' => Alumno::latest()
						->orWhere('apellido', 'LIKE', $keyWord)
						->orWhere('nombres', 'LIKE', $keyWord)
						->orWhere('dni', 'LIKE', $keyWord)
						->orWhere('fecha_nac', 'LIKE', $keyWord)
						->orWhere('calle', 'LIKE', $keyWord)
						->orWhere('numero', 'LIKE', $keyWord)
						->orWhere('manzana', 'LIKE', $keyWord)
						->orWhere('casa', 'LIKE', $keyWord)
						->orWhere('depto', 'LIKE', $keyWord)
						->orWhere('barrio', 'LIKE', $keyWord)
						->orWhere('cp', 'LIKE', $keyWord)
						->orWhere('ciudad', 'LIKE', $keyWord)
						->orWhere('provincia', 'LIKE', $keyWord)
						->orWhere('celular', 'LIKE', $keyWord)
						->orWhere('mail', 'LIKE', $keyWord)
						->orWhere('obs', 'LIKE', $keyWord)
						->orWhere('baja', 'LIKE', $keyWord)
						->orWhere('genero', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->apellido = null;
		$this->nombres = null;
		$this->dni = null;
		$this->fecha_nac = null;
		$this->calle = null;
		$this->numero = null;
		$this->manzana = null;
		$this->casa = null;
		$this->depto = null;
		$this->barrio = null;
		$this->cp = null;
		$this->ciudad = null;
		$this->provincia = null;
		$this->celular = null;
		$this->mail = null;
		$this->obs = null;
		$this->baja = null;
		$this->genero = null;
    }

    public function store()
    {
        $this->validate([
		'apellido' => 'required',
		'nombres' => 'required',
		'dni' => 'required',
        ]);

        Alumno::create([ 
			'apellido' => $this-> apellido,
			'nombres' => $this-> nombres,
			'dni' => $this-> dni,
			'fecha_nac' => $this-> fecha_nac,
			'calle' => $this-> calle,
			'numero' => $this-> numero,
			'manzana' => $this-> manzana,
			'casa' => $this-> casa,
			'depto' => $this-> depto,
			'barrio' => $this-> barrio,
			'cp' => $this-> cp,
			'ciudad' => $this-> ciudad,
			'provincia' => $this-> provincia,
			'celular' => $this-> celular,
			'mail' => $this-> mail,
			'obs' => $this-> obs,
			'baja' => $this-> baja,
			'genero' => $this-> genero
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Alumno Successfully created.');
    }

    public function edit($id)
    {
        $record = Alumno::findOrFail($id);

        $this->selected_id = $id; 
		$this->apellido = $record-> apellido;
		$this->nombres = $record-> nombres;
		$this->dni = $record-> dni;
		$this->fecha_nac = $record-> fecha_nac;
		$this->calle = $record-> calle;
		$this->numero = $record-> numero;
		$this->manzana = $record-> manzana;
		$this->casa = $record-> casa;
		$this->depto = $record-> depto;
		$this->barrio = $record-> barrio;
		$this->cp = $record-> cp;
		$this->ciudad = $record-> ciudad;
		$this->provincia = $record-> provincia;
		$this->celular = $record-> celular;
		$this->mail = $record-> mail;
		$this->obs = $record-> obs;
		$this->baja = $record-> baja;
		$this->genero = $record-> genero;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'apellido' => 'required',
		'nombres' => 'required',
		'dni' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Alumno::find($this->selected_id);
            $record->update([ 
			'apellido' => $this-> apellido,
			'nombres' => $this-> nombres,
			'dni' => $this-> dni,
			'fecha_nac' => $this-> fecha_nac,
			'calle' => $this-> calle,
			'numero' => $this-> numero,
			'manzana' => $this-> manzana,
			'casa' => $this-> casa,
			'depto' => $this-> depto,
			'barrio' => $this-> barrio,
			'cp' => $this-> cp,
			'ciudad' => $this-> ciudad,
			'provincia' => $this-> provincia,
			'celular' => $this-> celular,
			'mail' => $this-> mail,
			'obs' => $this-> obs,
			'baja' => $this-> baja,
			'genero' => $this-> genero
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Alumno Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Alumno::where('id', $id);
            $record->delete();
        }
    }
}
