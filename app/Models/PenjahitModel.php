<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenjahitModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_penjahit')->get();
    }

    public function detailData($id_penjahit)
    {
        DB::table('tbl_penjahit')->where('id_penjahit', $id_penjahit)->first();
    }

   public function addData($data)
   {
        DB::table('tbl_penjahit')->insert($data);
   }

   public function deleteData($id_penjahit)
   {
       DB::table('tbl_penjahit')
            ->where('id_penjahit', $id_penjahit)
            ->delete();
   }
}
