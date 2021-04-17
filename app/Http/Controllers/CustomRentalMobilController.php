<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarRent;
use Validator;
use Redirect;
use Image;
use Form;
use File;

class CustomRentalMobilController extends Controller
{
    public function index()
    {
        $data = CarRent::all();
        return view('admin.custom_rental_mobil',['data'=>$data]);
    }

    public function tambah(Request $r)
    {
        // dd($r->foto);
        $validator = Validator::make($r->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpeg,jpg,png,gif|max:10000|required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                        ->withErrors($validator)
                        // ->withInput()
                        ->with('eror',1);
        }

        $file = $r->file('foto');
        $eks = $file->getClientOriginalExtension();//Mengambil ekstensi

        //Menamai gambar
        $imgname ='rental_mobil'.time().'.'.$eks;

        $tujuan_upload = 'pengunjung/images';
        $file->move($tujuan_upload,$imgname);

        $data = new CarRent;

        $data->judul = $r->nama;
        $data->isi = $r->deskripsi;
        $data->foto = $imgname;
        $data->save();
        return redirect('/custom_rental_mobil')->with('simpan','Data sukses disimpan');
    }

    public function edit($id)
    {
        $data = CarRent::find($id);
        // dd($data);
        return view('admin.edit.edit_rm',['data'=>$data,'id'=>$id]);
    }

    public function post(Request $r, $id)
    {
        $validator = Validator::make($r->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                        ->withErrors($validator)
                        // ->withInput()
                        ->with('eror',1);
        }
        
        $data = CarRent::find($id);

        if ($r->file('foto')) {
            $file = $r->file('foto');

            $foto = $data->foto;
            $file_t = "pegunjung/images/$foto";
    
            if(File::exists($file_t)) {
                File::delete($file_t);
            }
    
            $tujuan_upload = 'pengunjung/images';
            $file->move($tujuan_upload,$data->foto);
        }

        $data->judul = $r->nama;
        $data->isi = $r->deskripsi;
        $data->save();
        return redirect('/custom_rental_mobil')->with('edit','Data sukses diubah');
    }

    public function hapus($id)
    {
        $data = CarRent::find($id);
        
        $foto = $data->foto;
        $file_t = "pegunjung/images/$foto";

        if(File::exists($file_t)) {
            File::delete($file_t);
        }

        $data->delete();
    
        return redirect('/custom_rental_mobil')->with('hapus','Data berhasil dihapus!');
    }
}
