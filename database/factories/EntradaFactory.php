<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entrada;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrada>
 */
class EntradaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

      protected $model = Entrada::class;

    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence,
            'description'=>$this->faker->paragraph,
            'category'=>$this->faker->randomElement(['Tecnología','Educación','Economía'])
        ];
    }
}
