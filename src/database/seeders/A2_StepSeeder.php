<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Step;

class A2_StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $steps = [
            ['product_id' => 1, 'step_key' => 'color', 'step_name' => 'Color', 'step_number' => 1, 'template' => 'grid'],
            ['product_id' => 1, 'step_key' => 'type', 'step_name' => 'Type', 'step_number' => 2, 'template' => 'list'],
            ['product_id' => 1, 'step_key' => 'frame_type', 'step_name' => 'Frame Type', 'step_number' => 3, 'template' => 'visual'],
            ['product_id' => 1, 'step_key' => 'movement', 'step_name' => 'Movement', 'step_number' => 4, 'template' => 'visual'],
            ['product_id' => 1, 'step_key' => 'handle_type', 'step_name' => 'Handle Type', 'step_number' => 5, 'template' => 'list'],
            ['product_id' => 1, 'step_key' => 'handle_model', 'step_name' => 'Handle Model', 'step_number' => 6, 'template' => 'grid'],
            ['product_id' => 1, 'step_key' => 'side_panel', 'step_name' => 'Side Panel', 'step_number' => 7, 'template' => 'visual'],
            ['product_id' => 1, 'step_key' => 'size', 'step_name' => 'Size', 'step_number' => 8, 'template' => 'list'],
            ['product_id' => 1, 'step_key' => 'handle_color', 'step_name' => 'Handle Color', 'step_number' => 9, 'template' => 'grid'],
        ];

        foreach ($steps as $step) {
            Step::create($step);
        }
    }

}
