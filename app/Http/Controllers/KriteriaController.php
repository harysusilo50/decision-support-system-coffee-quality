<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        $kriterias = Kriteria::get();
        return view('kriteria', [
            'kriterias' => $kriterias
        ]);
    }

    public function tambah()
    {
        return view('tambahkriteria');
    }

    public function storeTambah(Request $request)
    {
        $this->validate($request, [
            'kriteria' => 'required|max:255',
            'tipe' => 'required|in:cost,benefit',
            'bobot' => 'required|integer'
        ]);

        $kriteria = Kriteria::create([
            'kriteria' => $request->kriteria,
            'tipe' => $request->tipe,
            'bobot' => $request->bobot
        ]);

        return redirect()->route('kriteria');
    }

    public function destroy(Kriteria $kriteria, Request $request)
    {
        $kriteria->delete();
        return back();
    }
}
