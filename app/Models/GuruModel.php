<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    // use HasFactory;
    public function allData(){
      return   [
            [
                'nip' => '12333',
                'nama' => 'yadi',
                'mapel' => 'bahas inggris'
            ],
            [
                'nip' => '13252',
                'nama' => 'yaya',
                'mapel' => 'bahas indonesia'
            ],
            [
                'nip' => '12293',
                'nama' => 'sinta',
                'mapel' => 'fisika'
            ],

        ];
    }
}
