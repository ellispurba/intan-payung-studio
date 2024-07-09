<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table='karyawan';
    protected $fillable=["nama","no_hp","alamat","email","posisi"];
    protected $primaryKey = 'karyawan_id';
}
