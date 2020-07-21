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
        $this->call(StepSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(FieldSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(AdminSeeder::class);
    }
}
