<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => 'Ukrainian',
            'slug' => 'uk'
        ]);
        Language::create([
            'name' => 'Russian',
            'slug' => 'ru'
        ]);
        Language::create([
            'name' => 'English',
            'slug' => 'en'
        ]);
    }
}
