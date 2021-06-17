<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    
    protected $model = Product::class;

    public function definition()
    {
        $name = $this->faker->unique()->sentence(1);
        return [
            'code' => $this->faker->unique()->ean8(),
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'stock' => $this->faker->randomDigit(),
            'price' => $this->faker->buildingNumber(),
            'image' => '',
            'category_id' => Category::all()->random()->id,
        ];
    }
        
}
