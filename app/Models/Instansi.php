<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_instansi',
        'alamat_instansi',
        'web_instansi',
        'nope_instansi',
        'email_instansi',
        'kategori_instansi',
        'logo_instansi',
        'profile_instansi',
        'visi_misi_instansi',
        'dasar_hukum_instansi',
        'daftar_layanan_instansi',
        'persyaratan_layanan_instansi',
        'biaya_layanan_instansi',
        'alur_layanan_instansi'
    ];
}
