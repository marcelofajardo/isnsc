<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DocenteFactory extends Factory
{
    protected $model = Docente::class;

    public function definition()
    {
        return [
			'apellido' => $this->faker->name,
			'nombres' => $this->faker->name,
			'dni' => $this->faker->name,
			'titulo' => $this->faker->name,
			'fecha_ingreso' => $this->faker->name,
			'celular' => $this->faker->name,
			'mail' => $this->faker->name,
			'obs' => $this->faker->name,
        ];
    }
}
