<?php

namespace Database\Factories;

use App\Models\Cor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cor_id' => Cor::query()->inRandomOrder()->value('id'),
            'nome' => fake()->word(),
            'descricao' => fake()->words(10, true),
            'ativo' => fake()->boolean(),
        ];
    }
}
