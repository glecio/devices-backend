<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{

    protected $model = \App\Models\Brand::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

   

    public function definition()
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
