<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        'comment_post_ID'=>3,
        'comment_author' => 2,
        'comment_author_email'=>fake()->email(),
        'comment_content'=>fake()->realText(),
        'comment_approved'=>1,
        'comment_author_url'=>fake()->url(),
        'comment_author_IP'=>fake()->ipv6,
        'comment_type'=>'comment',
        'comment_agent'=>fake()->userAgent(),
        'comment_parent'=>array_rand([0,1,2]),
        ];
    }
}
