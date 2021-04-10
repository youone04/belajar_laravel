@extends('master_page.v_template')
@section('title' , 'Add Guru')
@section('content')
<form action="/guru/insert" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>NIP</label>
                <input  name="nip" class="form-control" value="{{old('nip')}}"/>
                <div class="invalid-feedback text-danger">
                    @error('nip')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Nama Guru</label>
                <input name="nama_guru" class="form-control" value="{{old('nama_guru')}}"/>
                <div class="invalid-feedback text-danger">
                    @error('nama_guru')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input name="mapel" class="form-control" value="{{old('mapel')}}"/>
                <div class="invalid-feedback text-danger">
                    @error('mapel')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Upload Photo</label>
                <input type="file" name="foto_guru" class="form-control" value="{{old('foto_guru')}}" />
                <div class="invalid-feedback text-danger">
                    @error('foto_guru')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
               <button class="btn btn-primary btn-sm">simpan</button>
            </div>
        </div>
    </div>

</form>
    
@endsection