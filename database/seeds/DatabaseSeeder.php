<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('competences')->insert(['name' => 'competences ' . $i]);
        }
        for ($i = 1; $i < 21; $i++) {
            DB::table('subjects')->insert(['name' => 'Subject ' . $i]);
        }    }
}
