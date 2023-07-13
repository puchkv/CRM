<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel:Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->catchPhrase(),
            'source' => fake()->domainName(),                       // Source::class
            'category' => Category::first(),       //Category::inRandomOrder()->first(),                     // Category::class
            'price' => fake()->numberBetween(1000, 10000),
            'site' => fake()->domainName(),
            'created_by' => fake()->name(),
            //'comments' => fake()->realText(200),                  // Comment::class
            //'contacts' => fake()->                                // Contact::class
            //'actions' =>                                          // Action::class
        ];
    }
}
