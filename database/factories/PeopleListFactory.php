<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PeopleList;

class PeopleListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PeopleList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'people_id' => $this->faker->numberBetween(-10000, 10000),
            'name' => $this->faker->name,
            'designation' => $this->faker->word,
            'department' => $this->faker->word,
            'bio' => $this->faker->text,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'website_link' => $this->faker->word,
            'image' => $this->faker->word,
            'address' => $this->faker->text,
            'status' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
