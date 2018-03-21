<?php

namespace Tests\Unit;

use App\Post;
use App\User;
use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    protected $post;

    protected function setUp()
    {
        parent::setUp();
        $this->post = factory(Post::class)->create();
    }

    /** @test */
    public function a_post_has_comment()
    {
        $this->assertInstanceOf(Collection::class, $this->post->comments);
    }

    /** @test */
    public function a_post_has_author()
    {
        $this->assertInstanceOf(User::class, $this->post->author);
    }

    /** @test */
    public function a_post_can_make_string_path()
    {
        $post = factory(Post::class)->create();
        $this->assertEquals("/posts/{$post->channel->slug}/{$post->id}", $post->path());
    }


}
