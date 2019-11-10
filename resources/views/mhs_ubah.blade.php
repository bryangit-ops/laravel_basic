@extends('layouts.univ')

@section('content')
    <body>

    <br>
     <fieldset>
      <legend>Ubah Data </legend>
      <form method="post" action="/mahasiswa/update/{{ $mahasiswa->id }}">

          {{ csrf_field() }}
          {{ method_field('PUT') }}

              <label>NIM Mahasiswa</label>
              <input type="text" name="nim" class="form-control" placeholder="nim" value=" {{ $mahasiswa->nim }}">

              <br>
              <br>

              <label>Nama Mahasiswa</label>
              <input type="text" name="nama" class="form-control" placeholder="nama" value=" {{ $mahasiswa->nama }}">

              <br>
              <br>

              <label>Jurusan Mahasiswa</label>
              <input type="text" name="jurusan" class="form-control" placeholder="jursan" value=" {{ $mahasiswa->jurusan }}">

              <br>
              <br>

              <label>Alamat</label>
              <textarea name="alamat" class="form-control" placeholder="alamat"> {{ $mahasiswa->alamat }} </textarea>


              <br>
              <br>
              <br>


              <input type="submit" class="btn btn-success" value="Simpan">
              <a href="/mahasiswa" class="btn btn-primary">Kembali</a>

      </fieldset>
    </body>
@endsection
</html>
