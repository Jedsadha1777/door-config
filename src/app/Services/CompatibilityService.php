<?php

namespace App\Services;

use App\Models\Rule;

class CompatibilityService
{
    public function getBlockedOptions($stepKey, $currentConfig)
    {
        $blocked = [];

        foreach ($currentConfig as $configStepKey => $configOptionCode) {
            $rules = Rule::where('if_step', $configStepKey)
                ->where('if_option', $configOptionCode)
                ->where('then_step', $stepKey)
                ->get();

            foreach ($rules as $rule) {
                // แก้ตรงนี้ - ใช้ cast ที่ define ใน Model แล้ว
                $blockOptions = is_array($rule->block_options) 
                    ? $rule->block_options 
                    : json_decode($rule->block_options, true);
                    
                $blocked = array_merge($blocked, $blockOptions ?? []);
            }
        }

        return array_unique($blocked);
    }
}