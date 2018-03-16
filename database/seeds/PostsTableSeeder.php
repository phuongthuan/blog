<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'Carl',
            'email' => 'carl95@example.com',
            'password' => bcrypt('123123'),
        ]);

        $posts = factory(Post::class, 10)->create();

        $posts->each(function ($post) {
            factory(Comment::class, 5)->create(['post_id' => $post->id]);
        });

        factory(Post::class, 5)->create([
            'user_id' => $user->id
        ]);
    }
}
