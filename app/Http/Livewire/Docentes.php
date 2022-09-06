<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Docente;

class Docentes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $apellido, $nombres, $dni, $titulo, $fecha_ingreso, $celular, $mail, $obs;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.docentes.view', [
            'docentes' => Docente::latest()
						->orWhere('apellido', 'LIKE', $keyWord)
						->orWhere('nombres', 'LIKE', $keyWord)
						->orWhere('dni', 'LIKE', $keyWord)
						->orWhere('titulo', 'LIKE', $keyWord)
						->orWhere('fecha_ingreso', 'LIKE', $keyWord)
						->orWhere('celular', 'LIKE', $keyWord)
						->orWhere('mail', 'LIKE', $keyWord)
						->orWhere('obs', 'LIKE', $keyWord)
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
		$this->titulo = null;
		$this->fecha_ingreso = null;
		$this->celular = null;
		$this->mail = null;
		$this->obs = null;
    }

    public function store()
    {
        $this->validate([
		'apellido' => 'required',
		'nombres' => 'required',
		'dni' => 'required',
		'titulo' => 'required',
		'celular' => 'required',
		'mail' => 'required',
		'obs' => 'required',
        ]);

        Docente::create([ 
			'apellido' => $this-> apellido,
			'nombres' => $this-> nombres,
			'dni' => $this-> dni,
			'titulo' => $this-> titulo,
			'fecha_ingreso' => $this-> fecha_ingreso,
			'celular' => $this-> celular,
			'mail' => $this-> mail,
			'obs' => $this-> obs
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Docente Successfully created.');
    }

    public function edit($id)
    {
        $record = Docente::findOrFail($id);

        $this->selected_id = $id; 
		$this->apellido = $record-> apellido;
		$this->nombres = $record-> nombres;
		$this->dni = $record-> dni;
		$this->titulo = $record-> titulo;
		$this->fecha_ingreso = $record-> fecha_ingreso;
		$this->celular = $record-> celular;
		$this->mail = $record-> mail;
		$this->obs = $record-> obs;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'apellido' => 'required',
		'nombres' => 'required',
		'dni' => 'required',
		'titulo' => 'required',
		'celular' => 'required',
		'mail' => 'required',
		'obs' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Docente::find($this->selected_id);
            $record->update([ 
			'apellido' => $this-> apellido,
			'nombres' => $this-> nombres,
			'dni' => $this-> dni,
			'titulo' => $this-> titulo,
			'fecha_ingreso' => $this-> fecha_ingreso,
			'celular' => $this-> celular,
			'mail' => $this-> mail,
			'obs' => $this-> obs
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Docente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Docente::where('id', $id);
            $record->delete();
        }
    }
}
