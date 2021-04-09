@extends('master_page.v_template')
@section('title' , 'Detail Guru')
@section('content')
<table class="table">
    <tr>
        <th width="100px">NIP</th>
        <th width="30px">:</th>
        <th>{{$guru->nip}}</th>
    </tr>

    <tr>
        <th width="100px">Nama Guru </th>
        <th width="30px">:</th>
        <th>{{$guru->nama_guru}}</th>
    </tr>

    <tr>
        <th width="100px">Mata Pelajaran </th>
        <th width="30px">:</th>
        <th>{{$guru->mapel}}</th>
    </tr>
    <tr>
        <th width="100px">Mata Pelajaran </th>
        <th width="30px">:</th>
        <th><img src="{{url('photo_guru/'.$guru->foto_guru)}}" alt="gambar" width="60px" /></th>
    </tr>
    <tr>
       <th> <a href="/guru" class="btn btn-success btn-small">Kembali</a></th>
    </tr>
</table>
    
@endsection