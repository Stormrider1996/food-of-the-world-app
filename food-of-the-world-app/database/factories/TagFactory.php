<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->word();
        
        return [
            'slug' => $this->faker->url(),
            'food_id' => Food::factory(),        
            'en' => [
                'title' => $title,
            ],
            'hr' => [
                'title' => $title . " in Hr",
            ],
        ];
    }
}
