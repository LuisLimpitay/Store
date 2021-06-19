<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{

    protected $model = Sale::class;
 
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,

        ];
    }
}
