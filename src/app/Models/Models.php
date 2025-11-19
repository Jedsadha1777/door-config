<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigSession extends Model
{
    protected $fillable = ['session_id', 'product_id', 'config', 'email'];

    protected $casts = [
        'config' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}