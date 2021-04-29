<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Supplier::factory(5)->create();
        Product::factory(10)->create();
        Order::factory(6)->create();
    }
}
