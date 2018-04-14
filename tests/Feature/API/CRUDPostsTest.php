<?php

namespace Tests\Feature\API;

use App\Channel;
use App\Post;
use App\User;
use Tests\TestCase;

class CreatePostsTest extends TestCase
{
    protected $post;
    protected $user;
    protected $channel;

    public function setUp()
    {
        parent::setUp();
        $this->post = factory(Post::class)->create();
        $this->user = factory(User::class)->create();
        $this->channel = factory(Channel::class)->create();
    }

    /** @test */
    public function it_users_can_view_all_posts()
    {
        $this->json('GET', route('api.posts.index'))
        ->assertStatus(200);
    }

    /** @test */
    public function it_users_can_view_specified_post()
    {
        $response = $this->json('GET', "api/posts/{$this->post->id}");
        $response->assertStatus(200);
        $this->assertDatabaseHas('posts', ['id' => $this->post->id]);
    }

    /** @test */
    public function it_users_can_create_a_post()
    {
        $post = factory(Post::class)->make();

        $response = $this->json('POST', route('api.posts.store'), $post->toArray());

        $response->assertStatus(201);

        $this->assertDatabaseHas('posts', ['body' => $post->body]);
    }

    /** @test */
    public function it_users_can_update_a_post()
    {
        $data_change = [
          'user_id' => $this->user->id,
          'channel_id' => $this->channel->id,
          'title' => 'New title',
          'body' => 'New body'
        ];

        $response = $this->json('PUT', "api/posts/{$this->post->id}", $data_change);

        $response->assertStatus(200);

        $this->assertDatabaseHas('posts', [
            'id' => $this->post->id,
            'user_id' => $this->user->id,
            'channel_id' => $this->channel->id,
            'title' => 'New title',
            'body' => 'New body'
        ]);
    }

    /** @test */
    public function it_users_can_delete_a_post()
    {
        $post_id = $this->post->id;

        $response = $this->json('DELETE', route('api.posts.destroy', [
            'posts' => $post_id
        ]));
        $response->assertStatus(204);

        $this->assertDatabaseMissing('posts', ['id' => $this->post->id]);
    }
}
