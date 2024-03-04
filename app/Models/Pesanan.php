<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $fillable = ['id_meja', 'id_detail_menu', 'nama_pemesan', 'pembayaran', 'metode', 'status'];

    public function meja()
    {
        return $this->belongsTo(Meja::class, 'id_meja', 'id');
    }

    public function detailMenu()
    {
        return $this->belongsTo(DetailMenu::class, 'id_detail_menu', 'id');
    }
}
