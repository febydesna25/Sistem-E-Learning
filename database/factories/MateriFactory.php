<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materi>
 */
class MateriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'matkul_id'=>mt_rand(1,5),
            'gambar'=>'',
            'ket'=>$this->faker->paragraph(mt_rand(2,3)),
        ];
    }
}
