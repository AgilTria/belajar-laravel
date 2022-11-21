<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Staf;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::factory(10)->create();
        // Mahasiswa::factory(100)->create();
        // Staf::factory(20)->create();
        // Kelas::factory(40)->create();
        // Berita::factory(20)->create();
        Guru::factory(10)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
