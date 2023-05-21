<?php

namespace Database\Seeders;

use App\Models\Conference;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Conference())->insert([
            [
                'name' => Lorem::sentence(5),
                'description' => Lorem::text(),
                'date' => date("Y-m-d"),
                'location' => Lorem::sentence(2),
            ],
            [
                'name' => Lorem::sentence(4),
                'description' => Lorem::text(),
                'date' => date("Y-m-d"),
                'location' => Lorem::sentence(3),
            ],
            [
                'name' => Lorem::sentence(3),
                'description' => Lorem::text(),
                'date' => date("Y-m-d"),
                'location' => Lorem::sentence(3),
            ],
        ]);
    }
}
