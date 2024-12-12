<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    /** @use HasFactory<\Database\Factories\KostFactory> */
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'nama_kost',
        'alamat',
        'nomor_whatsapp',
        'latitude',
        'longitude',
        "deskripsi",
        "peraturan",
        "fasilitas",
        "tipe_kost",

    ];
}
