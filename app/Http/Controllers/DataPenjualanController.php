<?php

namespace App\Http\Controllers;

use App\Models\BijiKopi;
use App\Models\DataPenjualan;
use Illuminate\Http\Request;

class DataPenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin']);
    }

    public function index()
    {
        $bijikopis = BijiKopi::get();
        $datapenjualans = DataPenjualan::get();
        return view('datapenjualan', [
            'bijikopis' => $bijikopis,
            'datapenjualans' => $datapenjualans
        ]);
    }

    public function storeTambah(Request $request)
    {
        $this->validate($request, [
            'biji_kopi_id' => 'required|integer',
            'jumlah_penjualan' => 'required|integer',
            'tanggal_penjualan' => 'required|string',
        ]);

        $datapenjualan = DataPenjualan::create([
            'biji_kopi_id' => $request->biji_kopi_id,
            'jumlah_penjualan' => $request->jumlah_penjualan,
            'tanggal_penjualan' => $request->tanggal_penjualan
        ]);

        return back();
    }

    public function destroy(DataPenjualan $datapenjualan)
    {
        $datapenjualan->delete();
        return back();
    }

    public function edit(DataPenjualan $datapenjualan, Request $request)
    {
        return view('editdatapenjualan', [
            'datapenjualan' => $datapenjualan,
        ]);
    }
    public function storeEdit(DataPenjualan $datapenjualan, Request $request)
    {
        $this->validate($request, [
            'tanggal_penjualan' => 'required|max:255',
            'jumlah_penjualan' => 'required|max:255',
        ]);
        $datapenjualan->tanggal_penjualan = $request->tanggal_penjualan;
        $datapenjualan->jumlah_penjualan = $request->jumlah_penjualan;
        $datapenjualan->save();

        return redirect()->route('data-penjualan');
    }
}
