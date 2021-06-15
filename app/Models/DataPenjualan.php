<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenjualan extends Model
{
    use HasFactory;

    protected $table = 'data_penjualan';

    protected $fillable = [
        'biji_kopi_id',
        'jumlah_penjualan',
        'tanggal_penjualan'
    ];

    public function bijiKopi(){
        return $this->belongsTo(BijiKopi::class, 'biji_kopi_id');
    }
}
