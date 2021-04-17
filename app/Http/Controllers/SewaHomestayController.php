<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homestay;

class SewaHomestayController extends Controller
{
    public function index()
    {
        $data = Homestay::all();
        return view('pengunjung.sewa_homestay',['data'=>$data]);
    }
}
