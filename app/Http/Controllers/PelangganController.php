<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('page_admin.v_pelanggan');
    }
    //
}
