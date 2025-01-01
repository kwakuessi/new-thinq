<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\User;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'photo' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'birthday' => $this->faker->date(),
            'gender' => $this->faker->randomElement(["male",""]),
            'user_id' => User::factory(),
        ];
    }
}
