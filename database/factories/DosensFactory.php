<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosens>
 */
class DosensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { $name=fake()->name();
        $nik=fake()->creditCardNumber();
        return [
            'nama' => $name,
            'slug'=>Str::of($name,$nik)->slug('-'),
            'nik' =>$nik,
            'phone' =>fake()->PhoneNumber(),
            'npwp' =>fake()->creditCardNumber(),
            'email' =>fake()->unique()->safeEmail(),
            //
            //
        ];
    }
}
