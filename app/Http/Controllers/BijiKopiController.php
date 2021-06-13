<?php

namespace App\Http\Controllers;

use App\Models\BijiKopi;
use Illuminate\Http\Request;

class BijiKopiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        $bijiKopis = BijiKopi::get();
        return view('bijikopi', [
            'bijikopis' => $bijiKopis
        ]);
    }

    public function storeTambah(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'harga' => 'required|max:255',
        ]);

        $kriteria = BijiKopi::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);

        return redirect()->route('biji-kopi');
    }

    public function destroy(BijiKopi $bijikopi, Request $request)
    {
        $bijikopi->delete();
        return back();
    }

    public function edit(BijiKopi $bijikopi, Request $request)
    {
        return view('editbijikopi', [
            'bijikopi' => $bijikopi
        ]);
    }
    public function storeEdit(BijiKopi $bijikopi, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'harga' => 'required|max:255',
        ]);
        $bijikopi->nama = $request->nama;
        $bijikopi->harga = $request->harga;
        $bijikopi->save();

        return redirect()->route('biji-kopi');
    }
}
