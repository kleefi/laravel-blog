<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Apa itu digital marketing?',
            'slug' => 'apa-itu-digital-marketing',
            'body' => 'lorem ipsum',
            'category_id' => '05749fa2-653a-4c67-8958-1fac5d6f9d13',
            'image' => 'gambar.png'
        ]);
        Post::create([
            'title' => 'Apa itu digital web dev?',
            'slug' => 'apa-itu-digital-web-dev',
            'body' => 'lorem ipsum',
            'category_id' => '63a66625-12a3-4e9e-ac59-4c7d961d0630',
            'image' => 'gambar.png'
        ]);
        Post::create([
            'title' => 'Apa itu digital content?',
            'slug' => 'apa-itu-digital-content',
            'body' => 'lorem ipsum',
            'category_id' => 'ed731028-3e5a-441d-acd9-26aa506ea952',
            'image' => 'gambar.png'
        ]);
    }
}
