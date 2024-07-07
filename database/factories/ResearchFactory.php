<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Research;

class ResearchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Research::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'sub_title' => $this->faker->word,
            'description' => $this->faker->text,
            'image' => $this->faker->word,
            'image_path' => $this->faker->word,
            'media_id' => $this->faker->numberBetween(-10000, 10000),
            'video' => $this->faker->word,
            'pdf_file' => $this->faker->word,
        ];
    }
}
