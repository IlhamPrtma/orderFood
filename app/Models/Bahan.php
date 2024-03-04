<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $table = 'bahan';
    protected $fillable = ['nama', 'jumlah'];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'id_bahan', 'id');
    }
}
