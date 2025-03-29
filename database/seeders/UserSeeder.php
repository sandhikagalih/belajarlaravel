<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sandhika Galih',
            'username' => 'sandhikagalih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::factory(5)->create();
    }
}
