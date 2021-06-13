<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BijiKopi extends Model
{
    use HasFactory;

    protected $table = 'biji_kopi';

    protected $fillable = [
        'nama',
        'harga'
    ];
}
