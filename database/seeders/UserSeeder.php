<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'country_id' => 1,
            'locale' => 'uk',
            'name' => 'Admin',
            'slug' => 'admin',
            'email' => 'tarbeev.leha@gmail.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('alex@wwwkote'),
        ]);

        $admin->roles()->attach(Role::where('slug', 'admin')->first()->id);
        
        $user = User::create([
            'country_id' => 1,
            'locale' => 'uk',
            'name' => 'user@mail.com',
            'slug' => 'dummy-user',
            'email' => 'user@mail.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('user@mail.com'),
        ]);

        $user->roles()->attach(Role::where('slug', 'user')->first()->id);
    }
}
