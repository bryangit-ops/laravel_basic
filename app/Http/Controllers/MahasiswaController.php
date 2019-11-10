<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  //show awal list mahasiswa
  public function index()
  {
    $mahasiswa = Mahasiswa::all();
    return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
  }

  //tambah mahasiswa
  public function tambah()
  {
  	return view('mhs_tambah');
  }

  //simpan mahasiswa yang ditambahkan
  public function store(Request $request)
  {
    $this->validate($request,['nim' => 'required','nama' => 'required','jurusan' => 'required','alamat' => 'required']);

    //perintah eloquent
    Mahasiswa::create
    ([
      'nim' => $request->nim,
      'nama' => $request->nama,
      'jurusan' => $request->jurusan,
      'alamat' => $request->alamat
    ]);

      return redirect('/mahasiswa');
  }

  //edit data yang sudah ada dan update data yang diubah tsb
  public function edit($id)
  {
    $mahasiswa = Mahasiswa::find($id);
      return view('mhs_ubah', ['mahasiswa' => $mahasiswa]);
  }

  public function update($id, Request $request)
  {
    $this->validate($request,['nim' => 'required','nama' => 'required','jurusan' => 'required','alamat' => 'required']);

    $mahasiswa = Mahasiswa::find($id);
    $mahasiswa->nim = $request->nim;
    $mahasiswa->nama = $request->nama;
    $mahasiswa->jurusan = $request->jurusan;
    $mahasiswa->alamat = $request->alamat;
    $mahasiswa->save();

      return redirect('/mahasiswa');
  }

  //hapus data
  public function delete($id)
  {
    $mahasiswa = Mahasiswa::find($id);
    $mahasiswa->delete();

      return redirect('/mahasiswa');
  }
}
