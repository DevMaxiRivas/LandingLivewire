<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'category_id' => Category::inRandomOrder()->first()->id, // Ensure a valid category ID is used
            'author' => $this->faker->name, // Adding author field
            'content' => $this->faker->paragraphs(3, true),
            'slug' => $this->faker->slug,
        ];
    }
}
