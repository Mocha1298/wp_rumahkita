<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TourPackage;
use App\CarRent;
use App\Homestay;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $count1 = TourPackage::count();
        $count2 = CarRent::count();
        $count3 = Homestay::count();
        return view('admin.dashboard',['count1'=>$count1, 'count2'=>$count2, 'count3'=>$count3]);
    }
}
