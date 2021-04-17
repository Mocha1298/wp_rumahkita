<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingPage;
use App\Gallery;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = LandingPage::first();
        $galeri = Gallery::all();
        return view('pengunjung.index',['data'=>$data,'galeri'=>$galeri]);
    }
}
