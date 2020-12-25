<?php

use Illuminate\Database\Seeder;
use App\Models\Attribute;
class AttributeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Attribute::class, 20)->create();
    }
}
