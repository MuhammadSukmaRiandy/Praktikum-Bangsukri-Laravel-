<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use App\Models\Pemasok;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RuangSeeder::class);
        $this->call(KaryawanSeeder::class);
        $this->call(PemasokSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(BarangMasukSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
