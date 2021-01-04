@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $barang->nama_barang }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url ('uploads') }}/{{ $barang -> gambar }}" class="rounded mx-auto d-block"
                                width="100%" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection