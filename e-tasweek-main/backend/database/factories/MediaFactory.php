<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'projects_id' => $this->faker->numberBetween(1, 10),
            'services_id' => $this->faker->numberBetween(1, 4),
            'mi_text' => $this->faker->text,
            'mi_type' => $this->faker->text,
            'mi_for' => $this->faker->text,
        ];
    }
}
