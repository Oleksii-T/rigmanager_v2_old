<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin'
        ]);
        Role::create([
            'name' => 'Blogger',
            'slug' => 'blogger'
        ]);
        Role::create([
            'name' => 'Support',
            'slug' => 'support'
        ]);
        Role::create([
            'name' => 'User',
            'slug' => 'user'
        ]);
    }
}
