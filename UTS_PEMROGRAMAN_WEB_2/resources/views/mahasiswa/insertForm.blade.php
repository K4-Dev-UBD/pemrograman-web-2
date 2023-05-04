@extends('mahasiswa.master')
@section('title', 'Tambah Data Mahasiswa')
@section('content')
<div class="col-lg-12">
    <div class="text-center my-5">
        <h1>Form Tambah Data Mahasiswa</h1>
        <a href="/mahasiswa">&laquo; kembali</a>
    </div>
    {{ Form::open(['url' => '/mahasiswa/insert']) }}
    <table class="table align-middle">
        <tr>
            <th class="text-center">NIM</th>
            <td>
                {{ Form::text('input_nim', null, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Nama</th>
            <td>
                {{ Form::text('input_nama', null, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Matakuliah</th>
            <td>
                {{ Form::text('input_matakuliah', null, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Tanggal Lahir</th>
            <td>
                {{ Form::date('input_tanggal_lahir') }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Jenis Kelamin</th>
            <td>
                {{ Form::radio('input_jenis_kelamin', 'L', null, ['id' => 'laki-laki']) }} {{ Form::label('laki-laki', 'Laki-Laki') }}
                {{ Form::radio('input_jenis_kelamin', 'P', null, ['id' => 'perempuan'])}} {{ Form::label('perempuan', 'Perempuan') }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Prodi</th>
            <td>
                {{ Form::select('input_prodi', ['sistem informasi' => "Sistem Informasi", 'teknik informatika' => 'Teknik Informatika'], null,  ['class' => 'form-select']) }}
            </td>
        </tr>
        <tr>
            <td>{{ Form::reset('Reset', ['class' => 'form-control btn btn-secondary']) }}</td>
            <td>{{ Form::submit('Tambah', ['class' => 'form-control btn btn-primary']) }}</td>
        </tr>
    </table>
    {{ Form::close() }}
</div>
@stop
