<?php

namespace Database\Factories;

use App\Models\Etiqueta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etiqueta>
 */
class EtiquetasFactory extends Factory
{
    protected $model = Etiqueta::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word, // Genera un nombre aleatorio para la etiqueta
        ];
    }
}
