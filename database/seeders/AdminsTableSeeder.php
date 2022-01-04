<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admins::create([
            'username' => 'admin',
            'password' => bcrypt('123123'),
            'weight' => 34.2
        ]);
        Admins::create([
            'username' => 'zwb',
            'password' => bcrypt('123123'),
            'weight' => 12.2
        ]);
    }
}
