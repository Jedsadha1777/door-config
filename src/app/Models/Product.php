<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'thumbnail'];

    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}