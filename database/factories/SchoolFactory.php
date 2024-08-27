<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{

    protected $model = schools::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_name' => $this->faker->name,
            'school_type' => $this->faker->randomElement(['public', 'private']),
            'cass' => $this->faker->randomElement(['cass 1', 'cass 2', 'cass 3']),
        ];
    }
}
