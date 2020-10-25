<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->firstName,
            'gender' => rand(0, 1),
            'date_birth' => $this->faker->dateTimeInInterval('-50 years', '-15 years'),
            'state' => rand(0, 1),
        ];
    }
}
