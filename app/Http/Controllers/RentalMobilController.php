<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarRent;

class RentalMobilController extends Controller
{
    public function index()
    {
        $data = CarRent::all();
        return view('pengunjung.rental_mobil',['data'=>$data]);
    }
}
