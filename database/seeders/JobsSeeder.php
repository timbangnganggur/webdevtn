<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'Frontend Engineer',
            'salary' => 150000,
            'type' => 'full_time',
            'description' => 'Mengubah tampilan lama webiste webdevtn.id',
            'qualification' => 'HTML, CSS, JS, dst'
        ]);

        Job::create([
            'name' => 'Backend Engineer',
            'salary' => 180000,
            'type' => 'full_time',
            'description' => 'Mengubah sistem lama webiste webdevtn.id',
            'qualification' => 'Go, PHP, dst'
        ]);
    }
}
