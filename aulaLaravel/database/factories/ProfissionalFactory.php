<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profissional>
 */
class ProfissionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        "nome" => fake()->name(),
        "email" => fake() ->email(),
        "telefone" => fake() ->phoneNumber(),
        "data_de_nascimento" => fake() ->date(),
        "cep" => fake()->postcode(),
        ];
    }
}
