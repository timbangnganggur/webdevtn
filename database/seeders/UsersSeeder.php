<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Nova Andre',
            'last_name' => 'Saputra',
            'birthdate' => '1999-11-08',
            'username' => 'A',
            'phone_number' => '082234386822',
            'instagram_account' => 'andreditvirs',
            'email' => 'a@gmail.com',
            'password' => '$2b$10$OpHA.maZ7eMbEHuLwr1O/Ot/HSubALCO62Z5vvsdP5od9wenYB89S',
        ]);
    }
}
