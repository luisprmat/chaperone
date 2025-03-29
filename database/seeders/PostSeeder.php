<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(range(0, 19))
            ->each(function () {
                Post::factory()
                    ->has(Comment::factory()->times(rand(2, 6)))
                    ->create();
            });
    }
}
