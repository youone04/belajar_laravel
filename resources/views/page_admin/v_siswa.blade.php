@extends('master_page.v_template')
@section('title' , 'Siswa')
@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama siswa</th>
            <th>Kelas </th>
            <th>Mata pelajaran</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($siswa as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->nama_siswa}}</td>
                <td>{{$item->nis}}</td>
                <td>{{$item->kelas}}</td>
                <td>{{$item->mapel}}</td>
            </tr>
            
        @endforeach
    </tbody>

</table>



@endsection