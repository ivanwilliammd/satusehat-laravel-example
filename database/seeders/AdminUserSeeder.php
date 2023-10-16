<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@satusehatlaravel.com',
            'password' => bcrypt('satusehatindonesia'),
        ]);

        User::create([
            'name' => 'Secondary User',
            'email' => 'second@satusehatlaravel.com',
            'password' => bcrypt('seconduser'),
        ]);
    }
}
