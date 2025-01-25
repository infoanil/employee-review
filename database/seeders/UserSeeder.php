<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Ajay', 'Anil', 'Rahul', 'Chirag', 'Yash G', 'Yash k', 'Milan', 'Aevin', 'Dhaval', 'Sachin', 'Kuldeep', 'Nirav', 'Keyur'];

        foreach ($names as $name) {
            DB::table('users')->insert([
                'name' => $name,
                'uuid' => Str::uuid(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
