<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Lorenzo Rigon',
            'email' => 'lorenzocardoso@hotmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 1,
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
    }
}
