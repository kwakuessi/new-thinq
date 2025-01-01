<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Inventory;
use App\Models\SubCategory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'unit' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'featured_image' => $this->faker->word(),
            'weight' => $this->faker->numberBetween(-10000, 10000),
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'type' => $this->faker->randomElement(["physical",""]),
            'weight_unit' => $this->faker->randomElement(["kg",""]),
            'height_value' => $this->faker->randomFloat(0, 0, 9999999999.),
            'height_unit' => $this->faker->randomElement(["cm",""]),
            'width_value' => $this->faker->randomFloat(0, 0, 9999999999.),
            'width_unit' => $this->faker->randomElement(["cm",""]),
            'depth_value' => $this->faker->randomFloat(0, 0, 9999999999.),
            'depth_unit' => $this->faker->randomElement(["cm",""]),
            'volume_value' => $this->faker->randomFloat(0, 0, 9999999999.),
            'volume_unit' => $this->faker->word(),
            'sub_category_id' => SubCategory::factory(),
        ];
    }
}
