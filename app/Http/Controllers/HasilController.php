<?php

namespace App\Http\Controllers;

use App\Models\BijiKopi;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    

    public function index()
    {
        $bijikopis = BijiKopi::get();
        $bijiKopiCollection = [];
        $counter = 0;
        $hasil = false;
        foreach ($bijikopis as $bijikopi) {
            $total[] = $bijikopi->nilaiKriteriaTabel4();
            $bijiKopiCollection[$counter]['value'] = $bijikopi->nilaiKriteriaTabel4();
            $bijiKopiCollection[$counter]['bijikopi'] = $bijikopi;
            $counter++;
        }
        rsort($total);
        for ($i = 0; $i < count($total); $i++) {
            if ($bijiKopiCollection[$i]['value'] == $total[0]) {
                $hasil = $bijiKopiCollection[$i]['bijikopi'];
            }
        }
        $bijikopis = BijiKopi::get();
        $kriterias = Kriteria::get();

        return view('hasil', [
            'bijikopis' => $bijikopis,
            'kriterias' => $kriterias,
            'numberOne' => $hasil
        ]);
    }
}
