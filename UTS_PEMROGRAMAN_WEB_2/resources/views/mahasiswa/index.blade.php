@extends('mahasiswa.master')
@section('title', 'Data Mahasiswa')
@section('content')
<div class="col-lg-12">
    <h1 class="my-5 text-center">Data Mahasiswa</h1>
    <a href="/mahasiswa/create" class="btn btn-primary mb-2">Tambah Data</a>
    <table class="table table-striped">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Matakuliah</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Prodi</th>
            <th>Action</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{ $data->nim }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->mata_kuliah }}</td>
            <td>{{ $data->tanggal_lahir }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->prodi }}</td>
            <td>
                <a href="/mahasiswa/{{ $data->id }}/edit">Edit</a>
                |
                <a href="/mahasiswa/{{ $data->id }}/delete">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@stop
