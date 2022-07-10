<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class BuyController extends Controller
{
    public function index(Penjualan $penjualan)
    {
        return view('penjualan.buy',[
            'penjualan' => $penjualan,
        ]);
    }

    public function buy(Penjualan $penjualan)
    {
        return view('penjualan.checkout',[
            'penjualan' => $penjualan,
        ]);
    }

    public function buyer(Request $request)
    {
        $pembayaran = $request->validate([
            'card' => 'required',
            'credit' => 'required',
            'angka1' => 'required',
            'angka2' => 'required',
        ]);

        return redirect('/')->with('berhasil', 'pembayaran berhasil');
    }

    public function confirm()
    {
        return view('penjualan.confirm');
    }
}
