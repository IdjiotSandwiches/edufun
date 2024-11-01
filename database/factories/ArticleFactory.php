<?php

namespace Database\Factories;

use App\Models\Writer;
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
        $writerId = Writer::all()->pluck('id');
        $categoryId = Category::all()->pluck('id');

        return [
            'title' => $this->faker->realText(mt_rand(50, 100)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->realText(200),
            'body' => $this->faker->realText(500),
            'image_link' => $this->faker->randomElement(['/img/data-science.jpg', '/img/network-security.jpg']),
            'writer_id' => $this->faker->randomElement($writerId),
            'category_id' => $this->faker->randomElement($categoryId),
        ];
    }
}
