<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mat>
 */
class MatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     *             $table->string('nom');

     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
        ];
    }
}
