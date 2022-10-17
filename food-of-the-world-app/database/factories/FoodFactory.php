<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        
        $type = $this->faker->randomElement(['C', 'U', 'D']);
        if ($type == 'U'){
            $status = 'updated';
        } else if ($type == 'D') {
            $status = 'deleted';
        } else {
            $status = 'created';
        }
        
        return [
            'title' => $faker->foodName(),
            'description' => $this->faker->sentence(),
            'status' => $status,
        ];
    }
}
