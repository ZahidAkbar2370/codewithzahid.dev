<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lecutre;
use Faker\Generator as Faker;

class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(1,3),
            "language_id" => $this->faker->numberBetween(1,3),
            "document_id" => $this->faker->numberBetween(1,3),
            "title" => $this->faker->title(),
            "video_link" => $this->faker->url(),
            "thumbnail" => $this->faker->image(),
            "publication_status" => $this->faker->numberBetween(1,2),
        ];
    }
}
