<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function categorymodel()
    {
        return $this->hasMany(article::class, 'cat_id', 'id');
    }
}
