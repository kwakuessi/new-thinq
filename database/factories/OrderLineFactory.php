<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderLine;

class OrderLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderLine::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'inventory_id' => Inventory::factory(),
            'total_weight' => $this->faker->numberBetween(-10000, 10000),
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'unit_price' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
