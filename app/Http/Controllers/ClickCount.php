<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Click;

class ClickCount extends Controller
{
    public function facebook()
    {
        $data = Click::find(1);
        $data->click += 1;
        $data->save();
        return redirect('https://web.facebook.com/yuli.julie.7');
    }
    public function instagram()
    {
        $data = Click::find(2);
        $data->click += 1;
        $data->save();
        return redirect('https://www.instagram.com/rumahkitatour');
    }
    public function whatsapp()
    {
        $data = Click::find(3);
        $data->click += 1;
        $data->save();
        return redirect('https://wa.me/6289663235559?text=Saya%20Tertarik%20Dengan%20Layanan%20Anda.');
    }
}
