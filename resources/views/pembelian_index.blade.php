 <title>{{ $site }} | {{ $judul }}</title>
 @extends('layouts.app')

 @section('content')
 <div class="container">
  {{--  {{ $judul }} --}}
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
              <a class="btn btn-info btn-sm" href="{{ url('admin/pembelian/tambah') }}">
                <i class="fas fa-plus-circle fa-lg fa-fw"></i> Tambah Pembelian</a>
              </span>
            </div>
          </div>
         {{-- <a class="btn btn-default btn-sm" href="{{ url('admin/pembelian/tambah') }}" style="margin-left: 30em; font-weight: bold;"> 
          <i class="fas fa-plus-circle fa-fw"></i>
          Tambah Pelanggan
        </a> --}}
      </div>

      <div class="card-body table-responsive">
       <table class="table table-hover">
         <thead>
           <tr>
             <th>NO</th>
             <th>NAMA PEMASOK</th>
             <th>BARANG</th>
             <th>JUMLAH</th>
             <th>HARGA</th>
             <th>AKSI</th>
           </tr>

         </thead>
         <tbody>
          @foreach ($pembelians as $pembelian)
          <tr>
           <td>{{ $loop->iteration }}</td>

           <td>{{ $pembelian->nama_pemasok }}</td>
           <td>{{ $pembelian->barang->nama }}</td>
           <td align="center">{{ $pembelian->jumlah }}</td>
           <td align="right">Rp. {{ $pembelian->harga }}</td>
           <td>
            <a href="{{ url('admin/pembelian/edit/'.$pembelian->id) }}" class="btn-sm btn-info" ><i class="far fa-edit fa-fw"></i></a> 
            {{--  &nbsp; --}}

            <a href="{{ url('admin/pembelian/hapus/'.$pembelian->id) }}" class="btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus?')" ><i class="far fa-trash-alt fa-fw"></i></a>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
{{ $pembelians->links() }}
</div>
</div>
</div>
@endsection
