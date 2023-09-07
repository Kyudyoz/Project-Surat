@extends('layouts.main')
@section('container')
<div class="container1 my-4" style="padding-bottom: 10%" >
    <div class="row justify-content-center align-items-center" >
        <div class="col-md-6">
            <h2 class="text-center mb-4">Surat Keterangan Tidak Mampu</h2>
            
                @if(session()->has('gagal'))
                    <div class="alert alert-danger alert-dismissible col-lg-12" role="alert">
                        {{ session('gagal') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            
            <form method="post">
                @csrf
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="nik" autocomplete="off" class="form-control @error('nik')
                    is-invalid
                @enderror" id="nik" placeholder="nik" required value="{{ old('nik') }}">
                    <label for="nik">NIK</label>
                    @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <a href="" onclick="this.href='/cetak_sktm/'+ document.getElementById('nik').value" class="mt-3 w-100 btn btn-lg btn-primary" role="button">Buat Surat!</a>
            </form>
        </div>
    </div>
</div>
@endsection