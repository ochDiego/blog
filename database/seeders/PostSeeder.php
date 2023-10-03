<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Image;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(50)->create();

        foreach ($posts as $post) {
            Image::factory()->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            $post->tags()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}
