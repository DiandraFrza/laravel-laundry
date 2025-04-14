<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPesanan extends Model
{
    protected $table = 'data_pesanans';
    protected $fillable = ['nama', 'alamat', 'noHp', 'total_berat', 'jenis_paket', 'total_harga', 'status'];
}
