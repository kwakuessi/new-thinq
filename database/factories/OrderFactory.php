<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Order;
use App\Models\ShippingMethod;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_code' => $this->faker->word(),
            'customer_id' => Customer::factory(),
            'shipping_method_id' => ShippingMethod::factory(),
            'status' => $this->faker->randomElement(["pending",""]),
            'total_price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'order_type' => $this->faker->randomElement(["shipment",""]),
        ];
    }
}
