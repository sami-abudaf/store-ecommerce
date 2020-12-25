<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Brand::class, 20)->create();
    }
}
