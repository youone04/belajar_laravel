<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SiswaModel extends Model
{
    public function allData(){

        return DB::table('tb_siswa')
        ->leftJoin('tb_kelas', 'tb_kelas.id_kelas', '=', 'tb_siswa.id_kelas')
        ->leftJoin('tb_mapel', 'tb_mapel.id_mapel',  '=', 'tb_siswa.id_mapel')
        ->get()
        ;
    }
}
 