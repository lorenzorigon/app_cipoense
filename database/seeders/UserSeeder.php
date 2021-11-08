<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'password' => '12345678',
            'is_admin' => 1,
        ]);
    }
}
