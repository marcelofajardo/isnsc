<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlumnoFactory extends Factory
{
    protected $model = Alumno::class;

    public function definition()
    {
        return [
			'apellido' => $this->faker->name,
			'nombres' => $this->faker->name,
			'dni' => $this->faker->name,
			'fecha_nac' => $this->faker->name,
			'calle' => $this->faker->name,
			'numero' => $this->faker->name,
			'manzana' => $this->faker->name,
			'casa' => $this->faker->name,
			'depto' => $this->faker->name,
			'barrio' => $this->faker->name,
			'cp' => $this->faker->name,
			'ciudad' => $this->faker->name,
			'provincia' => $this->faker->name,
			'celular' => $this->faker->name,
			'mail' => $this->faker->name,
			'obs' => $this->faker->name,
			'baja' => $this->faker->name,
			'genero' => $this->faker->name,
        ];
    }
}
