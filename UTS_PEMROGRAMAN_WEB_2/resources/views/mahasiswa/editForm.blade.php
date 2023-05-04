@extends('mahasiswa.master')
@section('title', 'Edit Data Mahasiswa')
@section('content')
<div class="col-lg-12">
    <div class="text-center my-5">
        <h1>Form Edit Data Mahasiswa</h1>
        <a href="/mahasiswa">&laquo; kembali</a>
    </div>
    @foreach ($data as $mhs)
    {{ Form::open(['url' => '/mahasiswa'.'/'.$mhs->id.'/put', 'method' => 'PUT']) }}
    <table class="table align-middle">
        <tr>
            <th class="text-center">NIM</th>
            <td>
                {{ Form::text('input_nim', $mhs->nim, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Nama</th>
            <td>
                {{ Form::text('input_nama', $mhs->nama, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Matakuliah</th>
            <td>
                {{ Form::text('input_matakuliah', $mhs->mata_kuliah, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Tanggal Lahir</th>
            <td>
                {{ Form::date('input_tanggal_lahir', $mhs->tanggal_lahir) }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Jenis Kelamin</th>
            <td>
                {{ Form::radio('input_jenis_kelamin', 'L', $mhs->jenis_kelamin == 'L' ? true : false, ['id' => 'laki-laki']) }} {{ Form::label('laki-laki', 'Laki-Laki') }}
                {{ Form::radio('input_jenis_kelamin', 'P', $mhs->jenis_kelamin == 'P' ? true : false, ['id' => 'perempuan'])}} {{ Form::label('perempuan', 'Perempuan') }}
            </td>
        </tr>
        <tr>
            <th class="text-center">Prodi</th>
            <td>
                {{ Form::select('input_prodi', ['sistem informasi' => "Sistem Informasi", 'teknik informatika' => 'Teknik Informatika'], $mhs->prodi,  ['class' => 'form-select']) }}
            </td>
        </tr>
        <tr>
            <td>{{ Form::reset('Reset', ['class' => 'form-control btn btn-secondary']) }}</td>
            <td>{{ Form::submit('Tambah', ['class' => 'form-control btn btn-primary']) }}</td>
        </tr>
    </table>
    @endforeach
    {{ Form::close() }}
</div>
@stop
