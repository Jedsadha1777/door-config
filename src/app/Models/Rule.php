<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['if_step', 'if_option', 'then_step', 'block_options'];

    protected $casts = [
        'block_options' => 'array',
    ];
}