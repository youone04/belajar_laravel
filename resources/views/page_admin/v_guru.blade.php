@extends('master_page.v_template')
@section('title' , 'Guru')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Photo</th>
            <th>Aksi</th>
        </tr>

        <tbody>
            <?php $no=1 ?>
            @foreach ($guru as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->nama_guru}}</td>
                    <td>{{$item->mapel}}</td>
                    <td><img width="50px" src="{{url('photo_guru/'.$item->foto_guru)}}" alt="gambar" /></td>
                    <td>
                        <a href="/guru/detail/{{$item->id_guru}}" class="btn btn-success">detail</a>
                        <a href="" class="btn btn-warning">edit</a>
                        <a href="" class="btn btn-danger">delete</a>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </thead>
</table>
@endsection