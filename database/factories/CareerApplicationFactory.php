<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CareerApplication>
 */
class CareerApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'phone'=>fake()->phoneNumber(),
            'path_to_cv'=>'dioejfksij sd jksjdf owaej wesfd',
             'career_id'=> 2
        ];
    }
}
