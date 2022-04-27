<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjahitModel;

class DataPenjahitController extends Controller
{
    public function __construct()
    {
        $this->PenjahitModel = new PenjahitModel();
    }

    public function index()
    {
        $data = [
            'penjahit'=>$this->PenjahitModel->allData(),
        ];
        return view('v_datapenjahit', $data);
    }

    public function detail($id_penjahit)
    {
        $data = [
            'penjahit'=>$this->PenjahitModel->detailData($id_penjahit),
        ];
        return view('v_detailpenjahit', $data);
    }

    public function add()
    {
        return view('v_addpenjahit');
    }

    public function insert()
    {
        Request()->validate([
            'nama_penjahit' => 'required|unique:tbl_penjahit,nama_penjahit|min:2|max:255',
            'asal' => 'required',
            'foto_penjahit' => 'required|mimes:jpg,bmp,png',
        ]);

        //up foto
        $file = Request()->foto_penjahit;
        $fileName = Request()->nama.'.'. $file->extension();
        $file->move(public_path('foto_penjahit'), $fileName);

        $data = [
            'nama_penjahit' => Request()->nama_penjahit,
            'asal' => Request()->asal,
            'foto_penjahit' => $fileName,
        ];

        $this->PenjahitModel->addData($data);
        return redirect()->route('datapenjahit')->with('pesan', 'Data Berhasil di Tambah');
    }

    public function edit($id_penjahit)
    {
        $data = [
            'penjahit'=>$this->PenjahitModel->detailData($id_penjahit),
        ];
        return view('v_editpenjahit', $data);
    }

    public function delete($id_penjahit)
    {
        //hapus foto
        $penjahit = $this->PenjahitModel->detailData($id_penjahit);
        if($penjahit->foto_penjahit <> ""){
            unlink(public_path('foto_penjahit').'/'.$penjahit->foto_penjahit);
        }

        $this->PenjahitModel->deleteData($id_penjahit, $data);
        Return redirect()->route('datapenjahit')->with('pesan', 'Data Berhasil di Hapus');
    }
}
