<title>{{ config('Softech98', 'SOFTECH98 | DATA BARANG') }}</title>
@extends('layouts.app')

@section('content')
<div class="container">
  {{-- {{ $judul }} --}}
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-header"> {{-- style="font-size: 18px">{{ $judul }} --}}
        <div class="row">
          <div class="col-6">
           <h4 class="card-title">{{ $judul }}</h4> 
         </div>
         <div class="col-6">
          <span class="float-right">
            <a class="btn btn-info btn-sm" href="{{ url('admin/barang/tambah') }}">
              <i class="fas fa-plus-circle fa-lg fa-fw"></i> Tambah Barang</a>
            </span>
          </div>
        </div>
      </div>
      
        <div class="card-body">
         <table class="table table-hover">
           <thead>
             <tr>
               <th>NO</th>
               <th>NAMA</th>
               <th>HARGA</th>
               <th>STOK</th>
               <th>GAMBAR</th>
               <th>AKSI</th>
             </tr>
           </thead>
           <tbody>
            @foreach ($barangs as $barang)
            <tr>
             <td>{{ $loop->iteration }}</td>
             <td>{{ $barang->nama }}</td>
             <td>{{ $barang->harga_jual }}</td>
             <td>{{ $barang->stok }}</td>
            {{--  <td> {{$barang->gambar}} </td> --}}
             <td><img src="{{ Storage::url($barang->gambar) }}" width="50" /></td>
             <td>
              <a href="{{ url('admin/barang/edit/'.$barang->id) }}" class="btn-sm btn-info" > Ubah</a> 
              &nbsp;

              <a href="{{ url('admin/barang/hapus/'.$barang->id) }}" class="btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus?')" > Hapus </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  {{ $barangs->links() }}
</div>
</div>
</div>
@endsection
