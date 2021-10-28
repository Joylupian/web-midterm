<?php

namespace Database\Factories;

use App\Models\JoyController;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoyControllerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JoyController::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => $this->faker->word,
        'price' => $this->faker->word,
        'foods' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
