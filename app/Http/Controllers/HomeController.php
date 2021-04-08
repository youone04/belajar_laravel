<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data = ['nama' => 'yudi gunawan' , 'alamat' => 'sumanda'];
        return view('page_admin.v_home', $data);
    }

    public function guru(){
        return view('page_admin.v_guru');
    }
}
