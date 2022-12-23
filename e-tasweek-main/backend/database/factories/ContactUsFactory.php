<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactUs>
 */
class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cu_name' => $this->faker->name,
            'cu_email' => $this->faker->email,
            'cu_message' => $this->faker->text,
            'cu_date' => $this->faker->date,
        ];
    }
}
