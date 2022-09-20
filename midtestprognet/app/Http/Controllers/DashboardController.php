<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\merk;
use App\Models\satuan;

class DashboardController extends Controller
{
    public function index(request $request) 
    {
        $listproduk = produk::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Dashboard',
                'listproduk' => $listproduk);
        return view('dashboard.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }
}
