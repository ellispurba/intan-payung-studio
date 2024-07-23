<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table='pemesanan';
    protected $fillable=["penjadwalan_id","paket_id","user_id","nama","alamat","no_hp","email","tanggal","status"];
    protected $primaryKey = 'pemesanan_id';
}
