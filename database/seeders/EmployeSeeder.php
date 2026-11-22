<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('employes')->insert([
                'nama' => $faker->name(),
                'alamat' => $faker->randomElement(['Kediri', 'Malang', 'Surabaya', 'Nganjuk', 'Blitar']),
                'gender' => $faker->randomElement(['L', 'P']),
                'gaji' => $faker->randomElement([2000000, 2500000, 3000000]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}