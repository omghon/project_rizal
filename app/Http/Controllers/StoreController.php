<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class StoreController extends Controller
{
    public function index()
    {
        return view('penjualan.store',[
            'stores' => Penjualan::latest()->get(),
        ]);
    }
}
