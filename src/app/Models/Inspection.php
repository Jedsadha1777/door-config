<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = ['option_id', 'image', 'note'];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}