<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'lokasi'
    ];

    public function pemakaian()
    {
        return $this->hasMany(Pemakaian::class);
    }
}
