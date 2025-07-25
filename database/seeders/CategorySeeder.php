<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Digital Marketing'
        ]);
        Category::create([
            'title' => 'Web Development'
        ]);
        Category::create([
            'title' => 'Content Writer'
        ]);
    }
}
