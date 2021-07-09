<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Okey Group',
            'regions_id' => '1'
        ]);

        Company::create([
            'name' => 'Jne',
            'regions_id' => '1'
        ]);
        
        Company::create([
            'name' => 'Sampingan',
            'regions_id' => '1'
        ]);

        Company::create([
            'name' => 'Little Pep',
            'regions_id' => '1'
        ]);

        Company::create([
            'name' => 'Tana Tumpa Dara',
            'regions_id' => '1'
        ]);
    }
}
