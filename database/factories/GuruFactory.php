<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' =>fake()->name(),
            'NIK' =>fake()->numberBetween(),
            'Nohandphone' =>fake()->PhoneNumber(),
            'NPWP' =>fake()->numberBetween(),
            'email' =>fake()->unique()->safeEmail(),
            //
        ];
    }
}
