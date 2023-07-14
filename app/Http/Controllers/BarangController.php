<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang= Barang::all();

        return view('back.barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang= Barang::all();
        return view('back.barang.create',compact('barang'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'nama_barang'=>'required',
            'kode_barang'=>'required',
            'description'=>'required',
            'stok_barang'=>'required',
            'harga_barang'=>'required',
        ]);
        $data=$request->all();
        $data['nama_barang']=$request->nama_barang;
        $data['kode_barang']=$request->kode_barang;
        $data['description']=$request->description;
        $data['stok_barang']=$request->stok_barang;
        $data['harga_barang']=$request->harga_barang;

        $barang=barang::create($data)->paginate(4);
        Alert::success('success',' Creteted Succesfully');
        return redirect()->route('barang.index');   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang=barang::find($id);
        return view('back.barang.edit',compact('barang'));
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
        $barang=barang::find($id);
        $barang->update([
            'nama_barang'=>$request->nama_barang,
            'kode_barang'=>$request->kode_barang,
            'description'=>$request->description,
            'stok_barang'=>$request->stok_barang,
            'harga_barang'=>$request->harga_barang,
            'is_active'=>$request->is_active,
            
        ]);
        Alert::success('success','Updates Succesfully');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::find($id);

        $barang->delete($id);
        Alert::success('success',' Delete Succesfully');
        return redirect()->route('barang.index');
    }
}
