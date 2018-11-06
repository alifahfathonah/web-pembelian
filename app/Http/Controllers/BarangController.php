<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
	public function index()
	{
		$data['site']  = "SOFTECH98";
		$data['barangs'] = \App\Barang::paginate(4);
		$data['judul']  = "Data Barang";
		return view('barang_index',$data);
	}

	public function tambah()
	{
		$data['site']       = "SOFTECH98";
		$data['judul']      = "Tambah Data Barang";
		$data['barang']     = new \App\Barang();
		$data['action']     = 'BarangController@simpan';
		$data['btn_submit'] = 'SIMPAN';
		$data['method']     = "POST";
		$data['enctype']    = "multipart/form-data";

		return view('barang_form',$data);
	}
	public function simpan(Request $request)
	{
		$validasi = $this->validate($request,[
			'nama' => 'required|unique:barangs',
			'harga_jual' => 'required',
			'stok' =>	'required',
			'gambar' => 'required|file|mimes:jpg,png,jpeg,gif|max:2048',
		]);
		$file_nama             = $request->file('gambar')->store('public/gambar');
		$requestData           = $request->all();
		$requestData['gambar'] = $file_nama;
		\App\Barang::create($requestData);
		return back()->with('pesan', 'Data sudah disimpan!');
		/*

		\App\Barang::create($request->all());	
		return redirect('admin/barang')->with('pesan', 'Data sudah disimpan!');*/
	}
	public function hapus($id)
	{
		$barang = \App\Barang::findOrFail($id);
		$barang->delete();
		
		return back()->with('pesan','Data Terhapus!');
	}

	public function edit($id)
	{
		$data['site']  = "SOFTECH98";
		$data['judul']  = "Edit Data Barang";
		$data['barang']     = \App\Barang::findOrFail($id);
		$data['method']     = "PUT";
		$data['btn_submit'] = "UPDATE";
		$data['action']     = array('BarangController@update', $id);
		return view('barang_form',$data);
	}
	public function update(Request $request, $id)
	{
		$barang = \App\Barang::findOrFail($id);		
		$validasi = $this->validate($request,[
			 'nama' => 'required',
			// 'nama' => 'required|unique:barangs,nama,'.$id,
			// 'harga_jual' => 'required',
			// 'stok' =>	'required',
			// 'gambar' => 'required|file|mimes:jpg,png,jpeg,gif|max:2048',
		]);
		$file_nama             = $request->file('gambar')->store('public/gambar');
		$requestData           = $request->all();
		$requestData['gambar'] = $file_nama;
		$barang->update($request->all());        
		return redirect('admin/barang')->with('pesan', 'Data Barang diubah !');
	}
}