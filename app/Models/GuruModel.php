<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    // use HasFactory;
    public function allData(){
      return DB::table('tb_guru')->get();
    }

    public function detailData($id){
      return DB::table('tb_guru')->where('id_guru', $id)->first();
    }

    public function addData($data){
      DB::table('tb_guru')->insert($data);
    }
    public function editdata($id , $data){
      DB::table('tb_guru')
      ->where('id_guru' , $id)
      ->update($data);
    }
}
