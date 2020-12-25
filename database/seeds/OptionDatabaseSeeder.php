<?php

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Option::class, 20)->create();
    }
}
