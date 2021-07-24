<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function getBarang(){
        $barang = Barang::paginate(5);
        return view('welcome',compact('barang')); 
    }
    public function tambahBarang(){
        return view('create-data-barang');
    }
    public function createBarang(Request $request){
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'harga' => $request->harga,
        ]);
        return redirect('/');
    }
    public function showEditBarang($id){
         $barang = Barang::findorfail($id);
        return view('edit-data-barang',compact('barang'));
    }
    public function editBarang(Request $request,$id){
         $barang = Barang::find($id)->update($request->all()); 
         return redirect('/');
    }
    public function destroyBarang($id){
        $barang = Barang::findorfail($id);
        $barang->delete();
        return redirect('/');
    }
}
