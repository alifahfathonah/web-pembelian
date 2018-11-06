 <title>{{ $site }} | {{ $judul }}</title>
 @extends('layouts.app')

 @section('content')
 <div class="container">
  {{--  {{ $judul }} --}}
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="font-size: 18px">{{ $judul }}
         <a class="btn btn-default btn-sm" href="{{ url('admin/pelanggan/tambah') }}" style="margin-left: 30em; font-weight: bold;"> 
          <i class="fas fa-plus-circle fa-fw"></i>
          Tambah Pelanggan
         </a>
       </div>

       <div class="card-body">
         <table class="table table-hover">
           <thead>
             <tr>
               <th>NO</th>
               <th>NAMA</th>
               <th>ALAMAT</th>
               <th>AKSI</th>
             </tr>
             
           </thead>
           <tbody>
            @foreach ($pelanggans as $pelanggan)
            <tr>
             <td>{{ $loop->iteration }}</td>
             <td>{{ $pelanggan->nama }}</td>
             <td>{{ $pelanggan->alamat }}</td>
             <td>
              <a href="{{ url('admin/pelanggan/edit/'.$pelanggan->id) }}" class="btn-sm btn-info" > Ubah</a> 
              &nbsp;

              <a href="{{ url('admin/pelanggan/hapus/'.$pelanggan->id) }}" class="btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus?')" > Hapus </a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  {{ $pelanggans->links() }}
</div>
</div>
</div>
@endsection
