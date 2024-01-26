<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal_pinjam' => fake()->dateTimeThisMonth(),
            'tenggat_waktu' => fake()->dateTimeThisMonth('+7 days'),
            'status' => fake()->randomElement(['Menunggu','Sedang Meminjam', 'Sudah Dikembalikan']),
            'buku_id' => mt_rand(1,10),
            'user_id' => mt_rand(1,5),
        ];
    }
}
