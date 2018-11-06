<title> {{ $site }} | {{ $judul }}</title>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $judul }}</div>
                <div class="card-body">
                    {{ Form::model($pelanggan, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <div class="form-group">
                            {{ Form::label('nama', 'NAMA PELANGGAN') }}
                            {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'Nama Pelanggan','autofocus')) }}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('alamat', 'Alamat') }}
                            {{ Form::textarea('alamat',null,array('class'=>'form-control','placeholder' => 'Alamat','autofocus','rows'=>'3',)) }}
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ $btn_submit }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
