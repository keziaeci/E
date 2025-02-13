<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\KategoriBuku;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pengarang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Pengarang::factory(3)->create();
        Penerbit::factory(3)->create();
        Buku::factory(10)->create();
        Peminjaman::factory(50)->create();
        Kategori::factory(5)->create();
        KategoriBuku::factory(15)->create();
        
        $this->call([
            AdminSeeder::class,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
