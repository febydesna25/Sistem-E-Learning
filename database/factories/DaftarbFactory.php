<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftarb>
 */
class DaftarbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hari'=>$this->faker->sentence(1),
            'jam'=>$this->faker->sentence(1),
            'matkul_id' =>mt_rand(1,5),
            'dosen_id' =>mt_rand(1,5)
        ];
    }
}
