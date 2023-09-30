<?php

namespace Database\Factories;

use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pago>
 */
class PagosFactory extends Factory
{
    protected $model = Pago::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->date, // Genera una fecha aleatoria
            'monto' => $this->faker->randomFloat(2, 1, 1000), // Genera un monto aleatorio
        ];
    }
}
