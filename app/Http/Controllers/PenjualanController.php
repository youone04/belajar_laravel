<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanModel;
use Dompdf\Dompdf;


class PenjualanController extends Controller
{
    public function __construct(){
        $this->PenjualanModel = new PenjualanModel();
    }
    //
    public function index(){ 
        return view('page_admin.v_penjualan',['penjualan'=>$this->PenjualanModel->allData()],);
    }

    public function print(){
        return view('page_admin.v_print',['penjualan'=>$this->PenjualanModel->allData()],);
    }
    public function printpdf(){
        
        $html =  view('page_admin.v_printpdf',['penjualan'=>$this->PenjualanModel->allData()],);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
