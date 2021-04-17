<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\User;
use App\LandingPage;
use Validator;
use Redirect;
use File;

class CustomLandingPageController extends Controller
{
    public function index()
    {
        $data = Gallery::all();
        return view('admin.custom_landing_page',['data'=>$data]);
    }
    public function akun()
    {
        return view('admin.custom_akun');
    }
    public function ubah_akun(Request $r, $id)
    {
        $data = User::find($id);
        $validator = Validator::make($r->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                        ->withErrors($validator)
                        // ->withInput()
                        ->with('eror',1);
        }
        $data->name = $r->name;
        $data->email = $r->email;
        $data->save();
        return view('admin.custom_akun')->with('ubah','Data sukses diubah.');
    }

    public function tambah(Request $r)
    {
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
        $imgname ='gallery_'.time().'.'.$eks;

        $tujuan_upload = 'pengunjung/images';
        $file->move($tujuan_upload,$imgname);

        $data = new Gallery;

        $data->nama = $r->nama;
        $data->keterangan = $r->deskripsi;
        $data->foto = $imgname;
        $data->save();
        return redirect('/custom_landing_page')->with('simpan','Data sukses disimpan');
    }

    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('admin.edit.edit_gl',['data'=>$data]);
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

        $data = Gallery::find($id);

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

        $data->nama = $r->nama;
        $data->keterangan = $r->deskripsi;
        $data->save();
        return redirect('/custom_landing_page')->with('simpan','Data sukses diubah');
    }

    public function hapus($id)
    {
        $data = Gallery::find($id);
        
        $foto = $data->foto;
        $file_t = "pegunjung/images/$foto";

        if(File::exists($file_t)) {
            File::delete($file_t);
        }

        $data->delete();
    
        return redirect('/custom_landing_page')->with('hapus','Data berhasil dihapus!');
    }

    public function edit_lp(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'logo' => 'required',
            'alamat' => 'required',
            'jam_kerja' => 'required',
            'ket_jargon' => 'required',
            'gambar_jargon' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'background_jargon' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'judul_ucapan' => 'required',
            'ucapan' => 'required',
            'tanda_tangan' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'nama' => 'required',
            'paket_wisata' => 'required',
            'rental_mobil' => 'required',
            'sewa_homestay' => 'required',
            'galeri' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                        ->withErrors($validator)
                        // ->withInput()
                        ->with('eror',1);
        }

        $data = LandingPage::first();

        if($r->file('gambar_jargon')){
            $file1 = $r->file('gambar_jargon');
            $foto1 = $data->foto;
            $file_t1 = "pegunjung/images/$foto1";
            if(File::exists($file_t1)) {
                    File::delete($file_t1);
            }
            $tujuan_upload = 'pengunjung/images';
            $file1->move($tujuan_upload,$data->Gambar_Jargon);
        }
        if($r->file('background_jargon')){
            $file2 = $r->file('background_jargon');
            $foto2 = $data->foto;
            $file_t2 = "pegunjung/images/$foto2";
            if(File::exists($file_t2)) {
                File::delete($file_t2);
            }
            $tujuan_upload = 'pengunjung/images';
            $file2->move($tujuan_upload,$data->Background_Jargon);
        }
        if($r->file('tanda_tangan')){
            $file3 = $r->file('tanda_tangan');
            $foto3 = $data->foto;
            $file_t3 = "pegunjung/images/$foto3";
            if(File::exists($file_t3)) {
                File::delete($file_t3);
            }
            $tujuan_upload = 'pengunjung/images';
            $file3->move($tujuan_upload,$data->Tanda_Tangan);
        }

        $data->Logo = $r->logo;
        $data->Alamat = $r->alamat;
        $data->Jam_Kerja = $r->jam_kerja;
        $data->Keterangan_Jargon = $r->ket_jargon;
        $data->Judul_Ucapan = $r->judul_ucapan;
        $data->Ucapan = $r->ucapan;
        $data->Nama_Pemilik = $r->nama;
        $data->Layanan = $r->layanan;
        $data->Paket_Wisata = $r->paket_wisata;
        $data->Sewa_Homestay = $r->sewa_homestay;
        $data->Rental_Mobil = $r->rental_mobil;
        $data->Galeri = $r->galeri;
        $data->save();
        $data = Gallery::all();
        return view('admin.custom_landing_page',['data'=>$data])->with('edit','Data sukses diubah');
    }
}
