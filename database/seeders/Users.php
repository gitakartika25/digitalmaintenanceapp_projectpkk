<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diana',
            'email' => 'user@g.c',
            'password' => 'user1234',
            'role_id' => '1',
        ]);
        User::create([
            'name' => 'Rangga',
            'email' => 'user@g.com',
            'password' => 'user1234',
            'role_id' => '1',
        ]);
        User::create([
            'name' => 'Rangga',
            'email' => 'admin@g.com',
            'password' => 'admin1234',
            'role_id' => '2',
        ]);
    }
}
