<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct(){
        $this->GuruModel = new GuruModel();
        $this->middleware('auth');
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
    public function add(){
        return view('page_admin.v_addguru');
    }
    public function insert(){
        // jika form tidak terisi
        Request()->validate([
            'nip' => 'required|unique:tb_guru,nip|min:4|max:6',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'required|mimes:jpg,jpeg,bpm,png|max:1024'
        ],[
            'nip.required' => 'wajib diisi',
            'nip.unique' => 'NIP sudah ada',
            'nip.min' => 'Min 4 karakter',
            'nip.max' => 'Max 6 karakter',
            'nama_guru.required' => 'wajib diisi',
            'mapel.required' => 'wajib diisi',
            'foto_guru.required' => 'wajib diisi',
        ]);

        // upload gambar
        $file = Request()->foto_guru; //foto_guru diambil dr name di form view
        $fileName = Request()->nip.'.'.$file->extension();// name gambar akan dubah berdasarkan nip
        $file->move(public_path('photo_guru'),$fileName); //pindahkan ke folder public/photo_guru

        $data = [
            'nip'=>Request()->nip,
            'nama_guru'=>Request()->nama_guru,
            'mapel'=>Request()->mapel,
            'foto_guru'=>$fileName
        ];

        //memanggil model
        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan','pesan berhasil ditambahlan');


    }
    public function edit($id){
        // handle saat id tidak ada
        if(!$this->GuruModel->detailData($id)){
            abort(404);
        }
        return view('page_admin.v_editguru',['guru' => $this->GuruModel->detailData($id)],);

    }
    // update data guru
    public function update($id){
        // jika form tidak terisi
        Request()->validate([
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'mimes:jpg,jpeg,bpm,png|max:1024'
        ],[
            'nip.required' => 'wajib diisi',
            'nip.min' => 'Min 4 karakter',
            'nip.max' => 'Max 6 karakter',
            'nama_guru.required' => 'wajib diisi',
            'mapel.required' => 'wajib diisi',
        ]);

        if(Request()->foto_guru <> ""){//jika photo gurunya tdk kosong
        // upload gambar
        $file = Request()->foto_guru; //foto_guru diambil dr name di form view
        $fileName = Request()->nip.'.'.$file->extension();// name gambar akan dubah berdasarkan nip
        $file->move(public_path('photo_guru'),$fileName); //pindahkan ke folder public/photo_guru

        $data = [
            'nip'=>Request()->nip,
            'nama_guru'=>Request()->nama_guru,
            'mapel'=>Request()->mapel,
            'foto_guru'=>$fileName
        ];

        //memanggil model
        $this->GuruModel->editData($id ,$data);
    }else{
        $data = [
            'nip'=>Request()->nip,
            'nama_guru'=>Request()->nama_guru,
            'mapel'=>Request()->mapel,
         ];

        //memanggil model
        $this->GuruModel->editData($id ,$data);
    }
        return redirect()->route('guru')->with('pesan','pesan berhasil diupdate');


    }
    // delete data
    public function delete($id){
        // hapus gambar in dir
        $guru = $this->GuruModel->detailData($id);
        if($guru->foto_guru <> ""){//jika photo guru tidak kosong            
            unlink(public_path('photo_guru/'.$guru->foto_guru));
        }

        $this->GuruModel->deleteData($id);
        return redirect()->route('guru')->with('pesan','pesan berhasil diapus!');

    }
}
