<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     /*

     */
    public function definition(): array
    {

        return [
            'titulo'=>fake()->sentence(),
            'autor'=>fake()->name(),
            'editorial'=>fake()->company(),
            'anio_publicacion'=>fake()->numberBetween(1997, 2023),
            'cantidad_disponible'=>fake()->numberBetween(0, 100),
        ];
    }
}
