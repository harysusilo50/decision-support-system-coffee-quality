<?php

namespace App\Models;

use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BijiKopi extends Model
{
    use HasFactory;

    protected $table = 'biji_kopi';

    protected $fillable = [
        'nama',
        'harga'
    ];

    public function nilai(){
        return $this->hasMany(Nilai::class, 'biji_kopi_id');
    }

    public function isFilledKriteria(Kriteria $kriteria)
    {
        return $this->nilai->contains('kriteria_id', $kriteria->id);
    }

    public function findSubKriteriaId(Kriteria $kriteria)
    {
        return $this->nilai->where('kriteria_id', $kriteria->id)->first()->sub_kriteria_id;
    }
}
