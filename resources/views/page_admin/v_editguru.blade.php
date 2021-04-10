@extends('master_page.v_template')
@section('title' , 'edit guru')
@section('content')
<form action="/guru/update/{{$guru->id_guru}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>NIP</label>
                <input  name="nip" class="form-control" value="{{$guru->nip}}" readonly/>
                <div class="invalid-feedback text-danger">
                    @error('nip')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Nama Guru</label>
                <input name="nama_guru" class="form-control" value="{{$guru->nama_guru}}"/>
                <div class="invalid-feedback text-danger">
                    @error('nama_guru')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input name="mapel" class="form-control" value="{{$guru->mapel}}"/>
                <div class="invalid-feedback text-danger">
                    @error('mapel')
                        {{$message}}
                    @enderror
                </div>
            </div>
           <div class="col-sm-12 mb-5">
               <div class="col-sm-2">
                   <img width="70px" src="{{asset('photo_guru/'.$guru->foto_guru)}}" alt="gambar" />

               </div>
               <div class="col-sm-10">
                <div class="form-group">
                    <label>Ganti Photo</label>
                    <input type="file" name="foto_guru" class="form-control" value="{{$guru->foto_guru}}" />
                    <div class="invalid-feedback text-danger">
                        @error('foto_guru')
                            {{$message}}
                        @enderror
                    </div>
                </div>
               </div>
           </div>
           <br>
            <div class="form-group mt-5">
               <button class="btn btn-primary btn-sm" style="margin-top: 30px">simpan</button>
            </div>
        </div>
    </div>

</form>
@endsection