<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_content'=> fake()->realText(2000,2),
            'post_title'=>fake()->realText(30),
            'post_author'=>2,
            'parent_post'=> 0,
        ];
    }
}
