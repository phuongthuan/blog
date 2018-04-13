<?php

namespace Tests\Feature;

use App\Post;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatePostsTest extends TestCase
{
    /** @test */
    public function an_authenticated_user_can_create_a_post()
    {
        $this->actingAs(factory(User::class)->create());

        $post = factory(Post::class)->create();

        $this->post('/posts', $post->toArray());

        $this->get('/posts/' . $post->id)
            ->assertSee($post->title)
            ->assertSee($post->body);
    }
}
