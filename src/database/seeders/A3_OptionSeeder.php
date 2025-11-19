<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class A3_OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $options = [
            // Color (step_id: 1)
            ['step_id' => 1, 'option_code' => 'CREA_MOCHA', 'option_name' => 'Crea Mocha', 'thumbnail' => '/images/colors/crea-mocha.jpg', 'is_default' => true],
            ['step_id' => 1, 'option_code' => 'GRAY', 'option_name' => 'Gray', 'thumbnail' => '/images/colors/gray.jpg'],
            ['step_id' => 1, 'option_code' => 'DARK_GRAY', 'option_name' => 'Dark Gray', 'thumbnail' => '/images/colors/dark-gray.jpg'],
            ['step_id' => 1, 'option_code' => 'BROWN', 'option_name' => 'Brown', 'thumbnail' => '/images/colors/brown.jpg'],
            ['step_id' => 1, 'option_code' => 'WOOD', 'option_name' => 'Wood', 'thumbnail' => '/images/colors/wood.jpg'],
            ['step_id' => 1, 'option_code' => 'WHITE', 'option_name' => 'White', 'thumbnail' => '/images/colors/white.jpg'],
            
            // Type (step_id: 2)
            ['step_id' => 2, 'option_code' => 'IN_SWING_SILL', 'option_name' => 'In-swing with sill', 'thumbnail' => '/images/types/in-swing-sill.svg', 'is_default' => true],
            ['step_id' => 2, 'option_code' => 'OUT_SWING', 'option_name' => 'Out-swing', 'thumbnail' => '/images/types/out-swing.svg'],
            ['step_id' => 2, 'option_code' => 'IN_SWING_NO_SILL', 'option_name' => 'In-swing without sill', 'thumbnail' => '/images/types/in-swing-no-sill.svg'],
            
            // Frame Type (step_id: 3)
            ['step_id' => 3, 'option_code' => 'SINGLE', 'option_name' => 'Single', 'thumbnail' => '/images/frames/single.svg', 'is_default' => true],
            ['step_id' => 3, 'option_code' => 'SIDELIGHT', 'option_name' => 'Sidelight', 'thumbnail' => '/images/frames/sidelight.svg'],
            ['step_id' => 3, 'option_code' => 'DOUBLE', 'option_name' => 'Double', 'thumbnail' => '/images/frames/double.svg'],
            
            // Movement (step_id: 4)
            ['step_id' => 4, 'option_code' => 'LEFT', 'option_name' => 'Left (L)', 'thumbnail' => '/images/movement/left.svg', 'is_default' => true],
            ['step_id' => 4, 'option_code' => 'RIGHT', 'option_name' => 'Right (R)', 'thumbnail' => '/images/movement/right.svg'],
            
            // Handle Type (step_id: 5)
            ['step_id' => 5, 'option_code' => 'STANDARD', 'option_name' => 'Standard', 'thumbnail' => '/images/handles/standard.jpg', 'is_default' => true],
            ['step_id' => 5, 'option_code' => 'DIGITAL', 'option_name' => 'Digital', 'thumbnail' => '/images/handles/digital.jpg'],
            
            // Handle Model (step_id: 6)
            ['step_id' => 6, 'option_code' => 'BAR_A', 'option_name' => 'Bar_A', 'thumbnail' => '/images/handles/bar-a.jpg', 'is_default' => true],
            ['step_id' => 6, 'option_code' => 'BAR_F', 'option_name' => 'Bar_F', 'thumbnail' => '/images/handles/bar-f.jpg'],
            ['step_id' => 6, 'option_code' => 'LEVER_K', 'option_name' => 'Lever_K', 'thumbnail' => '/images/handles/lever-k.jpg'],
            ['step_id' => 6, 'option_code' => 'LEVER_L', 'option_name' => 'Lever_L', 'thumbnail' => '/images/handles/lever-l.jpg'],
            
            // Side Panel (step_id: 7)
            ['step_id' => 7, 'option_code' => 'NO_GLASS', 'option_name' => 'Without glass', 'thumbnail' => '/images/panels/no-glass.svg', 'is_default' => true],
            ['step_id' => 7, 'option_code' => 'WITH_GLASS', 'option_name' => 'With glass', 'thumbnail' => '/images/panels/with-glass.svg'],
            
            // Size (step_id: 8)
            ['step_id' => 8, 'option_code' => '800x2000', 'option_name' => '800 x 2000 mm'],
            ['step_id' => 8, 'option_code' => '900x2000', 'option_name' => '900 x 2000 mm'],
            ['step_id' => 8, 'option_code' => '1200x3000', 'option_name' => '1200 x 3000 mm', 'is_default' => true],
            
            // Handle Color (step_id: 9)
            ['step_id' => 9, 'option_code' => 'SILVER', 'option_name' => 'Silver', 'thumbnail' => '/images/colors/silver.jpg', 'is_default' => true],
            ['step_id' => 9, 'option_code' => 'BLACK', 'option_name' => 'Black', 'thumbnail' => '/images/colors/black.jpg'],
            ['step_id' => 9, 'option_code' => 'GOLD', 'option_name' => 'Gold', 'thumbnail' => '/images/colors/gold.jpg'],
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
