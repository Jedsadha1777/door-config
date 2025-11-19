<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rule;

class A5_RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $rules = [
            ['if_step' => 'type', 'if_option' => 'OUT_SWING', 'then_step' => 'type', 'block_options' => json_encode(['IN_SWING_SILL'])],
            ['if_step' => 'frame_type', 'if_option' => 'DOUBLE', 'then_step' => 'movement', 'block_options' => json_encode(['LEFT', 'RIGHT'])],
            ['if_step' => 'side_panel', 'if_option' => 'WITH_GLASS', 'then_step' => 'frame_type', 'block_options' => json_encode(['SINGLE'])],
        ];

        foreach ($rules as $rule) {
            Rule::create($rule);
        }
    }

}
