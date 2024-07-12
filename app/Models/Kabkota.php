<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    use HasFactory;

    protected $table = 'kabkotas';
    protected $fillable = ['nama', 'latitude', 'longitude', 'provinsi_id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}
