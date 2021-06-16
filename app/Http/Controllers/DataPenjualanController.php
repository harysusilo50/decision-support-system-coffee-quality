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

    public function index(){
        $bijikopis = BijiKopi::get();
        $datapenjualans = DataPenjualan::get();
        return view('datapenjualan',[
            'bijikopis' => $bijikopis,
            'datapenjualans' => $datapenjualans
        ]);
    }

    public function storeTambah(Request $request){
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

    public function destroy(DataPenjualan $datapenjualan){
        $datapenjualan->delete();
        return back();
    }
   
}
