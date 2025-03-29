<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'bg-red-100'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'bg-green-100'
        ]);

        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'ai',
            'color' => 'bg-blue-100'
        ]);
    }
}
