<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nim' =>$this->faker->bothify('##########'),
            'nama' => $this->faker->name(),
            'jenis_kelamin' =>$this->faker->randomElement(['L','P']),
            'kelas_id' =>mt_rand(3,4)
        ];
    }
}
