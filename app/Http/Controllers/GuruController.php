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
}
