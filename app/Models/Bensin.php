<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bensin extends Model
{
    use HasFactory;

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
