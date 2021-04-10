@extends('master_page.v_template')
@section('title' , 'Guru')
@section('content')
<a href="/guru/add" class="btn btn-primary btn-small">add</a><br>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
   {{session('pesan')}}
  </div>    
@endif

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
                        <a href="/guru/edit/{{$item->id_guru}}" class="btn btn-warning">edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$item->id_guru}}">
                           delete
                        </button>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </thead>
</table>
@foreach ($guru as $item)
<div class="modal modal-danger fade" id="modal-danger{{$item->id_guru}}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{$item->nama_guru}}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Ingin Menghapus Data {{$item->nama_guru}} ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/guru/delete/{{$item->id_guru}}" type="button" class="btn btn-outline">Yes</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
    
@endforeach

@endsection