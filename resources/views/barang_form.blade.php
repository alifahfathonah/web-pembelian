<title>{{$site}} | {{ $judul }}</title>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ $judul }}</div>
                <div class="card-body">
                    {{ Form::model($barang, array('action' => $action, 'files' => true, 'method' => $method, 'enctype' => $enctype)) }}
                    <div class="form-group">
                        {{ Form::label('nama', 'NAMA BARANG') }}
                        {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'Nama Barang','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    </div>

                    <div class="form-group">
                        {{ Form::label('harga_jual', 'HARGA') }}
                        {{ Form::number('harga_jual',null,array('class'=>'form-control','placeholder' => 'Harga','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('harga_jual') }}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('stok', 'STOK') }}
                        {{ Form::number('stok',null,array('class'=>'form-control','placeholder' => 'Stok','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('stok') }}</span>
                    </div>
                     <div class="form-group">
                        {{ Form::label('gambar', 'GAMBAR') }}
                        {{ Form::file('gambar',null,array('class'=>'form-control','placeholder' => 'gambar','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('stok') }}</span>
                    </div>
                   {{--  <div class="form-group">
                        {{ Form::label('gambar', 'Select image to upload') }}
                        <input type="file" name="gambar" id="gambar">
                    </div> --}}
                    {{-- <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">

                    </form>  --}}

                        {{-- <div class="form-group">
                            {{ Form::label('harga_jual', 'Harga') }}
                            {{ Form::textarea('harga_jual',null,array('class'=>'form-control','placeholder' => 'Harga','autofocus','rows'=>'3',)) }}
                            <span class="text-danger">{{ $errors->first('harga_jual') }}</span>
                        </div> --}}
                        <button type="submit" class="btn btn-primary btn-sm"><i class="far fa-save fa-2x">&nbsp</i> {{ $btn_submit }}</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
