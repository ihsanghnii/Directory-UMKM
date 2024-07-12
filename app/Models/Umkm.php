<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = 'umkms';

    protected $fillable = ['nama', 'modal', 'pemilik', 'alamat', 'website', 'email', 'kabkota_id', 'rating', 'kategori_umkm_id', 'pembina_id'];

    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class, 'kabkota_id');
    }

    public function kategori_umkm()
    {
        return $this->belongsTo(kategoriUmkm::class, 'kategori_umkm_id');
    }

    public function pembina()
    {
        return $this->belongsTo(Pembina::class, 'pembina_id');
    }
}
