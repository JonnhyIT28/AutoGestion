<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Gasto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemsFactory extends Factory
{
    protected $model = Item::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word, // Genera un nombre aleatorio para el ítem
            'importe' => $this->faker->randomFloat(2, 1, 1000), // Genera un importe aleatorio
            'gastos_id' => function () {
                return Gasto::factory()->create()->id; // Crea un gasto y obtiene su ID
            },
        ];
    }
}
