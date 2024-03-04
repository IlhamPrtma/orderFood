<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['nama', 'id_kategori', 'harga', 'id_bahan', 'ketersediaan'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function detailMenu()
    {
        return $this->hasOne(DetailMenu::class, 'id_menu', 'id');
    }

    public function pesanans()
    {
        return $this->hasManyThrough(Pesanan::class, DetailMenu::class, 'id_menu', 'id_detail_menu', 'id');
    }
}
