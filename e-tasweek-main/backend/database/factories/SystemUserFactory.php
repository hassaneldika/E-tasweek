<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SystemUser>
 */
class SystemUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
//$table->unsignedBigInteger('system_roles_id');
//$table->foreign('system_roles_id')->references('id')->on('system_roles');
//$table->string('su_f_name');
//$table->string('su_l_name');
//$table->string('su_email')->unique();
//$table->string('su_phone');
//$table->string('su_username')->unique();
//$table->string('su_password');
    public function definition()
    {
        return [
            'system_roles_id' => $this->faker->numberBetween(1,2),
            'su_f_name' => $this->faker->name,
            'su_l_name' => $this->faker->name,
            'su_email' => $this->faker->unique()->safeEmail,
            'su_phone' => $this->faker->phoneNumber,
            'su_username' => $this->faker->unique()->userName,
            'su_password' => $this->faker->password(),
        ];
    }
}
