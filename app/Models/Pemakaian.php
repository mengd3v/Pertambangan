<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemakaian extends Model
{
    use HasFactory;


    protected $fillable = [
        'kendaraan_id',
        'user_id',
        'garasi_id',
        'driver',
        'deskripsi',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function garasi()
    {
        return $this->belongsTo(Garasi::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
}
