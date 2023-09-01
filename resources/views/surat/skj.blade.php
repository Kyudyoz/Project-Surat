@extends('layouts.main')
@section('container')
<div class="container1">
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Surat Keterangan Janda</h2>
            
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
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="cerai" autocomplete="off" class="form-control @error('cerai')
                    is-invalid
                @enderror" id="cerai" placeholder="cerai" required value="{{ old('cerai') }}">
                    <label for="cerai">Jenis Cerai (Cerai Hidup/Cerai Mati)</label>
                    @error('cerai')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="suami" autocomplete="off" class="form-control @error('suami')
                    is-invalid
                @enderror" id="suami" placeholder="suami" required value="{{ old('suami') }}">
                    <label for="suami">Nama Suami</label>
                    @error('suami')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <a href="" id="buatSurat" onclick="this.href='/cetak_skj/'+ document.getElementById('nik').value + '/' + document.getElementById('cerai').value + '&' + document.getElementById('suami').value" class="mt-3 w-100 btn btn-lg btn-primary" role="button">Buat Surat!</a>
            </form>
        </div>
    </div>
</div>

@endsection