<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct(){
        $this->GuruModel = new GuruModel;
    }
    //
    public function index(){
        $data = ['guru' => $this->GuruModel->allData(),];
        return view('page_admin.v_guru',$data);
    }
}
