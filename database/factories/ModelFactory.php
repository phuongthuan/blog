<?php

use App\Channel;
use App\Comment;
use App\Post;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('fakerpassword'), // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'channel_id' => function () {
            return factory(Channel::class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

$factory->define(Channel::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->unique()->slug(6)
    ];
});

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'post_id' => function() {
            return factory(Post::class)->create()->id;
        },
        'body' => $faker->paragraph,
    ];
});
