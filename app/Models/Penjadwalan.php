<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    use HasFactory;
    protected $table='penjadwalan';
    protected $fillable=["tanggal","waktu_mulai","waktu_selesai"];
    protected $primaryKey = 'penjadwalan_id';
}
