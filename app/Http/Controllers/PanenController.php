<?php

namespace App\Http\Controllers;
use App\Models\Panen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panens=new Panen;
        $panens=$panens->all();
        //$panens=Panen::getPanen()->get();
        return view('v_daftarpanen',compact('panens'));
        //$panens= Panen::where('panenID',1)->first();
       // echo $panens->produk->produkName;
        //dd($panens);

        // $panens=Panen::getPanen()->get();
        // return view('v_daftarpanen',compact('panens'));
        // $panens= Panen::where('panenID',1)->first();
        // echo $panens->produk->produkName;
        // dd($panens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPanen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'requred'=>'Kolom :attribute harus lengkap',
            'date'=>'Kolom :attribute harus tanggal',
            'numeric'=>'Kolom :attribute harus angka',
        ];
        $validasi=$request->validate([
            'produkName'=>'required|unique:panens|max:255',
            'PanenDate'=>'required',
            'PanenJumlah'=>'required',
            'satuan'=>'required'
        ],$message);
        $validasi['user_id']=Auth::id();
        panen::create($validasi);
        return redirect('panen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($panenID)
    {
        $panen::Panen::find($panenID);
        return view('editPanen');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}