<?php

use App\Profession;
use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'name' => 'Back-End Developer'
        ]);
        Profession::create([
           'name' => 'Front-End Developer'
        ]);
        Profession::create([
            'name' => 'Full Stack Developer'
        ]);
        Profession::create([
            'name' => 'Designer'
        ]);
        Profession::create([
            'name' => 'Other'
        ]);
    }
}
