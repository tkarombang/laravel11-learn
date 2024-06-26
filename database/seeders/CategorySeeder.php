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
        // Category::factory(3)->create()

        Category::create([
            'nama_category' => 'Web Developer',
            'slug' => 'web-developer',
            'color' => 'red',
        ]);

        Category::create([
            'nama_category' => 'Software Tester',
            'slug' => 'software-tester',
            'color' => 'green',
        ]);

        Category::create([
            'nama_category' => 'Cloud Computing',
            'slug' => 'cloud-computing',
            'color' => 'blue',
        ]);

        Category::create([
            'nama_category' => 'Data Structure',
            'slug' => 'data-structure',
            'color' => 'yellow'
        ]);
    }
}
