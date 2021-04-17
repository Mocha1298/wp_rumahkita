<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TourPackage;
use Validator;
use Redirect;
use Image;
use Form;
use File;

class CustomPaketWisataController extends Controller
{
    public function index()
    {
        $data = TourPackage::all();
        return view('admin.custom_paket_wisata',['data'=>$data]);
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
        $imgname ='paket_wisata_'.time().'.'.$eks;

        $tujuan_upload = 'pengunjung/images';
        $file->move($tujuan_upload,$imgname);

        $data = new TourPackage;

        $data->judul = $r->nama;
        $data->isi = $r->deskripsi;
        $data->foto = $imgname;
        $data->save();
        return redirect('/custom_paket_wisata')->with('simpan','Data sukses disimpan');
    }

    public function edit($id)
    {
        $data = TourPackage::find($id);
        // dd($data);
        return view('admin.edit.edit_pw',['data'=>$data,'id'=>$id]);
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
        
        $data = TourPackage::find($id);

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
        return redirect('/custom_paket_wisata')->with('edit','Data sukses diubah');
    }

    public function hapus($id)
    {
        $data = TourPackage::find($id);
        
        $foto = $data->foto;
        $file_t = "pegunjung/images/$foto";

        if(File::exists($file_t)) {
            File::delete($file_t);
        }

        $data->delete();
    
        return redirect('/custom_paket_wisata')->with('hapus','Data berhasil dihapus!');
    }
}
