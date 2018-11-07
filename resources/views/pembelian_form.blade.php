<title> {{ $site }} | {{ $judul }}</title>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $judul }}</div>
                <div class="card-body">
                    {{ Form::model($pembelian, array('action' => $action, 'files' => true, 'method' => $method)) }}
                    
                    <div class="form-group{{ $errors->has('barang') ? ' has-error' : '' }}">
                        {!! Form::label('barang', 'BARANG') !!}
                        {!! Form::select('barang', $barang, null, ['id' => 'barang', 'class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('barang') }}</small>
                    </div>
                    <div class="form-group">
                        {{ Form::label('nama_pemasok', 'NAMA PEMASOK') }}
                        {{ Form::text('nama_pemasok',null,array('class'=>'form-control','placeholder' => 'Nama Pemasok','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('nama_pemasok') }}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('jumlah', 'JUMLAH') }}
                        {{ Form::number('jumlah',null,array('class'=>'form-control','placeholder' => 'Jumlah','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('harga', 'HARGA') }}
                        {{ Form::number('harga',null,array('class'=>'form-control','placeholder' => 'Harga','autofocus')) }}
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="far fa-save fa-fw"></i>{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
