<?php

namespace Database\Factories;

use App\Models\Cor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cor>
 */
class CorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        do {
            $colorName = $this->faker->unique()->colorName();
            $exists = Cor::where('nome', $colorName)->exists();
        } while ($exists);

        return [
            'nome' => $colorName,
        ];
    }
}