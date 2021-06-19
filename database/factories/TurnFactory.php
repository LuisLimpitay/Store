<?php

namespace Database\Factories;

use App\Models\Turn;
use App\Models\Turns;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TurnFactory extends Factory
{

    protected $model = Turn::class;

    public function definition()
    {
        $fecha = Carbon::today()->addDays(rand(1,365));
        
        return [
            'date' => $fecha,
            'time' => $this->faker->randomElement(['09:00']),
            'status' => 'ausente',

            'user_id' => User::all()->random()->id,
        ];
    }
}
