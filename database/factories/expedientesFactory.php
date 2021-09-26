<?php

namespace Database\Factories;

use App\Models\Expedientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class expedientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expedientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numexpte'=>$this->faker->numberBetween($int1 = 100, $int2 =17999999),
            'yearexpte'=>$this->faker->numberBetween($int1 = 1980, $int2 = 2021),
            'caratula'=>$this->faker->sentence(),
            'objeto'=>$this->faker->randomElement(['Reconocimiento de Partido de Distrito', 'Elecciones PASO del fecha', 'Incidente', 'Delitos']),
            'category'=>$this->faker->randomElement(['Organico', 'Contable', 'Elecciones Generales', 'Elecciones Paso', 'Junta Electoral Nacional']),
            'ulmov'=> $this-> faker->sentence(),
            'cad'=> $this-> faker->sentence(),
        ];
    }
}
