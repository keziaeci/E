<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->title(),
            'tahun_terbit' => fake()->year(),
            'penerbit_id' => mt_rand(1,3),
            'pengarang_id' => mt_rand(1,3),
            'stok' => mt_rand(1,10),
            'cover' => fake()->imageUrl(),
            'deskripsi' => fake()->paragraph(50)
        ];
    }
}
