<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use PDF;


class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all(); //asalnya dari model
        return view('index', compact('karyawan')); // menampilkan data di view
        //dd($karyawan);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
        $date =  date('y-m-d', strtotime($request->ttl));

        $karyawan = new Karyawan;
        $karyawan->no = $request->no;
        $karyawan->nama = $request->nama;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->status = $request->status;
        $karyawan->ttl = $request->ttl;
        $karyawan->alamat = $request->alamat;
        $karyawan->gambar = $namafile;
        $nm->move(public_path() . '/img/foto', $namafile);
        $karyawan->save();

        return redirect('/karyawan');
    }

    public function edit($id)
    {

        $karyawan = Karyawan::findorfail($id);

        return view('edit', compact(['karyawan'])); //memanggil nama variable
    }

    public function update(Request $request, $id)
    {
        $date =  date('y-m-d', strtotime($request->ttl));
        $karyawan = Karyawan::find($id);
        $awal = $karyawan->gambar;

        if ($request['gambar'] != null) {

            $request->gambar->move(public_path() . '/img/foto', $awal);
        }
        $karyawan->update($request->all());
        return redirect('/karyawan');
    }

    public function delete($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }

    public function cari(Request $request) //menangkap data
    {

        $cari = $request->cari;
        $karyawan = Karyawan::where('no', 'LIKE', '%' . $cari . '%') //mengambil data dari tabel
            ->orWhere('nama', 'LIKE', '%' . $cari . '%')
            ->paginate();

        //mengirim data ke index
        return view('index', ['karyawan' => $karyawan]);
    }
    // public function cetak_pdf()
    // {
    //     $karyawan = Karyawan::all();

    //     $pdf = PDF::loadview('karyawan_pdf', ['karyawan' => $karyawan]);
    //     return $pdf->download('data-karyawan-pdf');
    // }
}

//database, model, controller
//https://www.youtube.com/watch?v=NwHactaoQFg&list=RDCMUCA1UW__WEiBd1bmzyKlBUyw&start_radio=1&t=1166s
//https://www.youtube.com/watch?v=mEQW893YGhA&list=PLOpjxspexSIlL3jDsW5jlA75tJUP_fSW-&index=7