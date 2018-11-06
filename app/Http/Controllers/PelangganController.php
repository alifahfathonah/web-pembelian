<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{

	public function index()
  {
    $data['pelanggans'] = \App\Pelanggan::paginate(4);
    $data['judul']  = "Data Pelanggan";
    $data['site']  = "SOFTECH98";
    return view('pelanggan_index',$data);
  }
  public function tambah()
  {
    $data['site']  = "SOFTECH98";
    $data['judul']  = "Tambah Data Pelanggan";
    $data['pelanggan']      =  new \App\Pelanggan();
    $data['action']         = 'PelangganController@simpan';
    $data['btn_submit']     = 'SIMPAN';
    $data['method']         = "POST";
    return view('pelanggan_form',$data);
  }
  public function simpan(Request $request)
  {
    $validasi = $this->validate($request,[
      'nama' => 'required|min:3|max:50|unique:pelanggans',
      'alamat' => 'required|min:4|max:50',            
    ]);         
    
    \App\Pelanggan::create($request->all());
    return redirect('admin/pelanggan')->with('pesan', 'Data sudah disimpan!');
  }
  public function hapus($id)
  {
    $pelanggan = \App\Pelanggan::findOrFail($id);
    $pelanggan->delete(); 
    return back()->with('pesan','Data sudah dihapus!');
  }

  public function edit($id)
  {
    $data['site']  = "SOFTECH98";
    $data['judul']  = "Edit Data Pelanggan";
    $data['pelanggan']     = \App\Pelanggan::findOrFail($id);        
    $data['method']     = "PUT";
    $data['btn_submit'] = "UPDATE";
    $data['action']     = array('PelangganController@update', $id);
    return view('pelanggan_form',$data);        
  }
  public function update(Request $request, $id)
  {
   $pelanggan = \App\Pelanggan::findOrFail($id);
   $validasi = $this->validate($request,[
     'nama' => 'required|min:3|max:50|unique:pelanggans,nama,'.$id,
     'alamat' => 'required|min:4|max:50',            
   ]); 
   $pelanggan->update($request->all());        
   return redirect('admin/pelanggan')->with('pesan', 'Data diubah !');
 }

}

