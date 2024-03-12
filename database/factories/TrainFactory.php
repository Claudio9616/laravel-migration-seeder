<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'azienda' => fake()->company(),
            'stazione_di_partenza' => fake()->city(),
            'stazione_di_arrivo' => fake()->city(),
            'orario_di_partenza' => fake()->time(),
            'orario_di_arrivo' => fake()->time(),
            'codice_treno' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'numero_carrozze' => fake()->randomDigitNotNull(),
            'in_orario' => fake()->boolean(),
            'cancellato' => fake()->boolean()
        ];
    }
}
