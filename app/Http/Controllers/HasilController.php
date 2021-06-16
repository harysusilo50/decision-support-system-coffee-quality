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
        $kriterias = Kriteria::get();

        // dd($kriterias->nilai()->first()->subKriteria()->value);

        return view('hasil', [
            'bijikopis' => $bijikopis,
            'kriterias' => $kriterias,
        ]);
    }
}
