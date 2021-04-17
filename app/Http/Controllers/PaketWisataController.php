<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TourPackage;

class PaketWisataController extends Controller
{
    public function index()
    {
        $data = TourPackage::all();
        return view('pengunjung.paket_wisata',['data'=>$data]);
    }
}
