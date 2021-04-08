@extends('master_page.v_template')
@section('title' , 'Guru')
@section('content')
 @foreach($guru as $data)
 <h3>Nip : {{$data['nip']}}</h3>
 <h3>Nama : {{$data['nama']}}</h3>
 <h3>Mapel : {{$data['mapel']}}</h3> <br>
 @endforeach
@endsection