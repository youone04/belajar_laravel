<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function __construct(){
        $this->SiswaModel = new SiswaModel();
    }
    
    public function index(){

        return view('page_admin.v_siswa',['siswa'=>$this->SiswaModel->allData(),]);
    }
}
