<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name'           => 'Duilio',
            'email'          => 'admin@styde.net',
            'gender'         => 'm',
            'profession_id'  => 1,
            'password'       => bcrypt('admin')
        ]);
        factory(App\User::class, 49)->create();
    }
}
