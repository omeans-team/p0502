<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listmenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'image','name', 'icon_name','hargabeli','hargajual','stok'
    ];
}
