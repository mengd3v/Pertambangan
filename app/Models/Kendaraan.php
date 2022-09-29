<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillabe = [
        'merk',
        'tipe',
        'jenis',
        'nomor',
        'sewa_id'
    ];

    public function sewa()
    {
        return $this->hasOne(Sewa::class);
    }

    public function bensin()
    {
        return $this->hasMany(Bensin::class);
    }

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }

    public function pemakaian()
    {
        return $this->hasMany(Pemakaian::class);
    }
}
