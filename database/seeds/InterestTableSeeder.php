<?php

use App\Interest;
use Illuminate\Database\Seeder;

class InterestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interest::create(['name' => 'PHP']);
        Interest::create(['name' => 'Laravel']);
        Interest::create(['name' => 'Sass']);
        Interest::create(['name' => 'Ruby on Rails']);
    }
}
