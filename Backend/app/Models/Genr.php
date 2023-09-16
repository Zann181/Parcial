<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genr extends Model
{
    use HasFactory;
    public function band() { 
        return $this->belongsTo(Band::class, 'id_genre');
    }
}
