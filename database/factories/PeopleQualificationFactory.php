<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PeopleQualification;

class PeopleQualificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PeopleQualification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'people_list_id' => $this->faker->numberBetween(-10000, 10000),
            'title' => $this->faker->sentence(4),
            'position' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
