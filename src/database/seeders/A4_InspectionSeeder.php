<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inspection;

class A4_InspectionSeeder extends Seeder
{
    public function run()
    {
        $inspections = [
            // Color: Crea Mocha (option_id: 1)
            ['option_id' => 1, 'image' => '/images/inspect/color-label.jpg', 'note' => 'ตรวจสอบ Label สี'],
            ['option_id' => 1, 'image' => '/images/inspect/color-surface.jpg', 'note' => 'ตรวจผิวสี'],
            
            // Type: In-swing with sill (option_id: 7)
            ['option_id' => 7, 'image' => '/images/inspect/swing-direction.jpg', 'note' => 'ตรวจทิศทางเปิด'],
            ['option_id' => 7, 'image' => '/images/inspect/sill-height.jpg', 'note' => 'วัดความสูง Sill'],
            
            // Frame: Single (option_id: 10)
            ['option_id' => 10, 'image' => '/images/inspect/frame-single.jpg', 'note' => 'นับจำนวนบาน'],
            
            // Movement: Left (option_id: 13)
            ['option_id' => 13, 'image' => '/images/inspect/hinge-left.jpg', 'note' => 'ตรวจตำแหน่งบานพับ'],
            
            // Handle Type: Standard (option_id: 15)
            ['option_id' => 15, 'image' => '/images/inspect/handle-brand.jpg', 'note' => 'ตรวจ Brand'],
            
            // Handle Type: Digital (option_id: 16)
            ['option_id' => 16, 'image' => '/images/inspect/digital-screen.jpg', 'note' => 'ทดสอบหน้าจอ'],
            ['option_id' => 16, 'image' => '/images/inspect/digital-serial.jpg', 'note' => 'ตรวจ Serial'],
            
            // Side Panel: With glass (option_id: 22)
            ['option_id' => 22, 'image' => '/images/inspect/glass-stamp.jpg', 'note' => 'ตรวจ Tempered Stamp'],
            
            // Size: 1200x3000 (option_id: 25)
            ['option_id' => 25, 'image' => '/images/inspect/measure-width.jpg', 'note' => 'วัดความกว้าง'],
            ['option_id' => 25, 'image' => '/images/inspect/measure-height.jpg', 'note' => 'วัดความสูง'],
        ];

        foreach ($inspections as $inspection) {
            Inspection::create($inspection);
        }
    }
}
