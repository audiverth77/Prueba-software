<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'id_products' => $this->faker->numberBetween (1, 20),
            'product_quantity' => $this->faker->numberBetween ( 1, 20 ),
            'date' => $this->faker->dateTime(),
        ];
    }
}
