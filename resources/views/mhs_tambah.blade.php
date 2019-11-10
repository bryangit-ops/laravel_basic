@extends('layouts.univ')

@section('title', 'Tambah Data')

@section('content')

<fieldset>
  <legend>Tambah data</legend>
  <form method="post" action="/mahasiswa/store">

    {{ csrf_field() }}


        <label>NIM Mahasiswa</label>
        <input type="number" name="nim" >

        <br>
        <br>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" >

        <br>
        <br>

        <label>Jurusan Mahasiswa</label>
        <input type="text" name="jurusan" >

        <br>
        <br>

        <label>Alamat Mahasiswa</label>
        <textarea name="alamat" ></textarea>


        <br>
        <br>


        <input type="submit" class="btn btn-success" value="Simpan">
        <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
  </fieldset>
@endsection
</form>
