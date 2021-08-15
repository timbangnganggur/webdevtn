<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'id' => '1',
            'name' => 'Admin TimbangNganggur',
            'username' => 'AdminTN',
            'password' => Hash::make('Admin.12345'),
            'role' => 'superadmin'
        ]);
    }
}
