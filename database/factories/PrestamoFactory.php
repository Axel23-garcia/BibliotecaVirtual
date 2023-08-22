<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prestamo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamo>
 */
class PrestamoFactory extends Factory
{

    /*

     */
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'fecha_solicitud'=>fake()->dateTimeBetween('-1 month','now')->format('Y-m-d'),
           'fecha_prestamo'=>fake()->dateTimeBetween('-2 month','now')->format('Y-m-d'),
           'fecha_devolucion'=>fake()->dateTimeBetween('now','+1 month')->format('Y-m-d'),
           'libro_id'=>fake()->numberBetween(0,200),
           'usuario_id'=>fake()->numberBetween(0,200),

        ];
    }
}
