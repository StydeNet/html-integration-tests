<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->truncateTables();

        $this->call(ProfessionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(InterestTableSeeder::class);

        Model::reguard();
    }

    protected function truncateTables()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('users')->truncate();
        DB::table('professions')->truncate();
        DB::table('interests')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS = 1;");
    }
}
