<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutUs>
 */
class AboutUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'au_description' => $this->faker->text,
            'au_address' => $this->faker->address,
            'au_phone' => $this->faker->phoneNumber,
            'au_email' => $this->faker->email,
            'au_logo' => $this->faker->imageUrl,
            'au_location' => $this->faker->address,
            'au_openingHours' => $this->faker->time,
        ];
    }
}
