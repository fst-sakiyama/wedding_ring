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
        $this->call(Ring_classSeeder::class);
        $this->call(Ring_templatesSeeder::class);
    }
}
