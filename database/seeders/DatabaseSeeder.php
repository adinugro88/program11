<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => bcrypt('password'),
        ]);

        DB::table('karyawans')->insert([
            [
                'nama' => 'Rifky Aryo',
                'nip' => '1234567890',
                'alamat' => 'Jl. Merdeka No. 1',
                'email' => 'rifky@example.com',
                'no_hp' => '081234567890',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('gajis')->insert([
            [
                'no_kode' => 'GAJI-001',
                'tanggal' => now(),
                'karyawan_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('detail_gajis')->insert([
            [
                'deskripsi' => 'Gaji Pokok',
                'jumlah' => 5000000,
                'fee' => 500000,
                'potongan' => 100000,
                'gaji_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'deskripsi' => 'Bonus Kinerja',
                'jumlah' => 1000000,
                'fee' => 0,
                'potongan' => 0,
                'gaji_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
