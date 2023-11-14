<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreaEntradas>
 */
class CrearEntradasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo'=> $this->faker->sentence(),
            'autor'=> $this->faker->name(),
            'fecha_publicacion'=> $this->faker->date(),
            'contenido'=> $this->faker->realText()
        ];
    }
}
