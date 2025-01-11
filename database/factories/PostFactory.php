<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Post;
use App\Models\Subsite;
use App\Models\User;
use App\Traits\UrlTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

final class PostFactory extends Factory
{
    use UrlTrait;

    protected $model = Post::class;

    public function definition(): array
    {
        $url = $this->faker->url();
        $timestamp = $this->faker->dateTimeBetween('-20 years');

        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'url' => $this->useSecureProtocol($url),
            'subsite_id' => Subsite::inRandomOrder()->first(),
            'user_id' => User::inRandomOrder()->first(),
            'created_at' => $timestamp->format('Y-m-d H:i:s'),
            'published_at' => $timestamp->format('Y-m-d H:i:s'),
            'updated_at' => null,
            'is_published' => true,
        ];
    }

    public function moreInside(): PostFactory
    {
        return $this->state(fn(array $attributes) => [
            'more_inside' => $this->faker->paragraph(),
        ]);
    }
}
