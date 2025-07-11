<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
use App\Models\User;


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
    public function definition(): array
    {
        return [
            'title' => fake()->realText(25),
            'content' => fake()->realText(1000),
            'categorias_id' => Categoria::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
