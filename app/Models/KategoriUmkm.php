<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriUmkm extends Model
{
    use HasFactory;

    protected $table = 'kategori_umkms';

    protected $fillable = ['nama'];
    
    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}
