<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\Interest;

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
            'title' => fake()->catchPhrase(),
            'text' => fake()->realText(1000),
            'likes' => fake()->numberBetween(0, 999)
        ];
    }

    // Weist dem Article nach der Erstellung ein zufälliges Interest zu
    public function configure()
    {
        return $this->afterCreating(function (Article $article) {
            $article->interests()->attach(Interest::inRandomOrder()
                ->first()->id);
        });
    }
}
