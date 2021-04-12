@extends('master_page.v_template')
@section('title' , 'Penjualan')
@section('content')
<a href="/penjualan/print" target="_blank" class="btn btn-success" >Print To Printer</a>
<a href="/penjualan/printPDF" target="_blank" class="btn btn-primary" >Print To PDF</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>No Faktur</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($penjualan as $item)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$item->no_faktur}}</td>
            <td>{{$item->pelanggan}}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->total}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
   
@endsection