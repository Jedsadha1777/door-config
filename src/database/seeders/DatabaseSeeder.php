<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            A1_ProductSeeder::class,
            A2_StepSeeder::class,
            A3_OptionSeeder::class,
            A4_InspectionSeeder::class,
            A5_RuleSeeder::class,
        ]);
    }
}