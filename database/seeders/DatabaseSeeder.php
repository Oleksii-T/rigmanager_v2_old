<?php

namespace Database\Seeders;

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
        $this->call([
            LanguageSeeder::class,
            CountrySeeder::class,
            CurrencySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class
        ]);
    }
}
