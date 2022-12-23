<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'services_id' => $this->faker->numberBetween(1, 4),
            'pr_name' => $this->faker->name,
            'pr_link' => $this->faker->url,
        ];
    }
}
