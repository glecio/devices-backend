<?php

namespace Database\Factories;
use App\Models\Brand;


use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    protected $model = \App\Models\Device::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        return [
            'name' => $this->faker->word,
	        'description' => $this->faker->paragraph,
            'brand_id' => Brand::factory()
        ];
    }
}
