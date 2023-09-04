@extends('layouts.main')
@section('container')

<div class="container1 pb-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="mx-3 my-3">
                <a href="/sktm" class="btn btn-primary btn-lg custom-btn">Surat Keterangan Tidak Mampu</a>
            </div>
            <div class="mx-3 my-3">
                <a href="/sku" class="btn btn-primary btn-lg custom-btn">Surat Keterangan Usaha</a>
            </div>
            <div class="mx-3 my-3">
                <a href="/skkr" class="btn btn-primary btn-lg custom-btn">Surat Keterangan Kepemilikan Rumah</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mx-3 my-3">
                <a href="/skd" class="btn btn-primary btn-lg custom-btn">Surat Keterangan Domisili</a>
            </div>
            
            <div class="mx-3 my-3">
                <a href="/skk" class="btn btn-primary btn-lg custom-btn">Surat Keterangan Kematian</a>
            </div>
            <div class="mx-3 my-3">
                <a href="/skj" class="btn btn-primary btn-lg custom-btn">Surat Keterangan Janda/Duda</a>
            </div>
            
        </div>
    </div>
</div>
@endsection
