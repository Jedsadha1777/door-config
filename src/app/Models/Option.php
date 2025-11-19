<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['step_id', 'option_code', 'option_name', 'thumbnail', 'is_default'];

    protected $casts = [
        'is_default' => 'boolean',
    ];

    public function step()
    {
        return $this->belongsTo(Step::class);
    }

    public function inspections()
    {
        return $this->hasMany(Inspection::class);
    }
}