<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;

    protected $table = 'meja';
    protected $fillable = ['nama'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_meja', 'id');
    }
}
