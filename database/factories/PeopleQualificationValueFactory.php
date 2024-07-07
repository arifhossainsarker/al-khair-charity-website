<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PeopleQualificationValue;

class PeopleQualificationValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PeopleQualificationValue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'people_qualification_category_id' => $this->faker->numberBetween(-10000, 10000),
            'value' => $this->faker->text,
            'position' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
