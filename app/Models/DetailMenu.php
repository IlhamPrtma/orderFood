<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailMenu extends Model
{
    protected $table = 'detail_menu';
    protected $fillable = ['id_menu', 'harga', 'kuantitas'];
}
