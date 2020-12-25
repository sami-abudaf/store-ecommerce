<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'  => 'Sami Abudaf',
            'email'  => 'sami@gmail.com',
            'password'  => bcrypt('123456789'),
            'mobile'  => '0599351187',
            'photo'=>'',
            'remember_token' => Str::random(10),

        ]);


    }
}
