<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct(){
        $this->GuruModel = new GuruModel();
    }
    
    public function index(){
        return view('page_admin.v_guru',['guru' => $this->GuruModel->allData(),]);
    }

    public function detail($id){
        // handle saat id tidak ada
        if(!$this->GuruModel->detailData($id)){
            abort(404);
        }
        return view('page_admin.v_detailguru', ['guru' => $this->GuruModel->detailData($id)],);
    }
}
