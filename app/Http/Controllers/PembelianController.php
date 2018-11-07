<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{

	public function index()
  {
    $data['pembelians'] = \App\Pembelian::paginate(4);
    $data['judul']  = "Data Pembelian";
    $data['site']  = "SOFTECH98";
    return view('pembelian_index',$data);
  }
  public function tambah()
  {
    $data['site']       = "SOFTECH98";
    $data['pembelian']  = new \App\Pembelian();
    $data['judul']      = "Tambah Data Pembelian";
    $data['action']     = 'PembelianController@simpan';
    $data['barang']     = \App\Barang::pluck('nama','id');
    $data['btn_submit'] = 'SIMPAN';
    $data['method']     = "POST";
    return view('pembelian_form',$data);
    
  }
  
 public function simpan(Request $request)
{
    $validasi = $this->validate($request,[  
        'nama_pemasok' => 'required',          
       'jumlah' => 'required|integer',        
     ]);
 
    $barang           = \App\Barang::findOrFail($request->barang_id);
    $stok_awal        = $barang->stok;
    $stok_total       = $stok_awal+$request->jumlah;
    $barang->stok     = $stok_total;
    \App\Pembelian::create($request->all());
    $barang->save();
    return back()->with('pesan', 'Transaksi Pembelian Berhasil');
}

 public function hapus($id)
 {
  $pembelian = \App\Pembelian::findOrFail($id);
  $pembelian->delete(); 
  return back()->with('pesan','Data sudah dihapus!');
}

public function edit($id)
{
  $data['site']  = "SOFTECH98";
  $data['judul']  = "Edit Data Pembelian";
  $data['pembelian']     = \App\Pembelian::findOrFail($id);
  $data['barang']     = \App\Barang::pluck('nama','id');        
  $data['method']     = "PUT";
  $data['btn_submit'] = "UPDATE";
  $data['action']     = array('PembelianController@update', $id);
  return view('pembelian_form',$data);        
}
public function update(Request $request, $id)
{
  $barang           = \App\Barang::findOrFail($request->barang_id);
  $pembelian = \App\Pembelian::findOrFail($id);

  $validasi = $this->validate($request,[
   'nama_pemasok' => 'required|min:4|max:50'           
 ]); 
  
  $pembelian->update($request->all());        
  return redirect('admin/pembelian')->with('pesan', 'Data Pembelian diubah !');
}

}

