<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

   public function album()
    {
        return $this->belongsTo(Album::class, 'id_band');
    }

    public function genr()
{
    return $this->belongsTo(Genr::class, 'id' );
}

}
