@extends('layouts.univ')

@section('title', 'List Data')

@section('content')
    <body>
      <h3>DATA MAHASISWA</h3>



        <table border="3">
            <tr>
              <th>Nim</th>
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Alamat</th>
              <th>OPSI</th>
            </tr>


            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>
                    <a href="/mahasiswa/edit/{{ $mhs->id }}">Edit</a>
                    |
                    <a href="/mahasiswa/hapus/{{ $mhs->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <a href="/mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        <br>
        <br>
        <br>
        <br>
        <h8>{{hahaha()}}</h8>

    </body>
@endsection
</html>
