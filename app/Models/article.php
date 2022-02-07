<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    public function articlemodel()
    {
        return $this->belongsTo(category::class);
    }
}
