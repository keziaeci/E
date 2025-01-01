<?php

namespace Database\Factories;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KategoriBuku>
 */
class KategoriBukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'buku_id' => mt_rand(1,10),
            'buku_id' => Buku::pluck('id')->random(),
            // 'kategori_id' => mt_rand(1,5),
            'kategori_id' => Kategori::pluck('id')->random(),
        ];
    }
}
