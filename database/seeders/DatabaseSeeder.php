<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Turn;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        

        Category::factory(5)->create();
        Product::factory(20)->create();
        Turn::factory(15)->create();
        Sale::factory(5)->create();

    }
}
