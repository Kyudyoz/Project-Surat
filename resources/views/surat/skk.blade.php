@extends('layouts.main')
@section('container')
<div class="container1 my-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Surat Keterangan Kematian</h2>
            
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
                    <input type="text" name="hari" autocomplete="off" class="form-control @error('hari')
                    is-invalid
                @enderror" id="hari" placeholder="hari" required value="{{ old('hari') }}">
                    <label for="hari">Hari Kematian</label>
                    @error('hari')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="date" name="tanggal" autocomplete="off" class="form-control @error('tanggal')
                    is-invalid
                @enderror" id="tanggal" placeholder="tanggal" required value="{{ old('tanggal') }}">
                    <label for="tanggal">Tanggal Kematian</label>
                    @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="time" name="jam" autocomplete="off" class="form-control @error('jam')
                    is-invalid
                @enderror" id="jam" placeholder="jam" required value="{{ old('jam') }}">
                    <label for="jam">Jam Kematian</label>
                    @error('jam')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="tempat" autocomplete="off" class="form-control @error('tempat')
                    is-invalid
                @enderror" id="tempat" placeholder="tempat" required value="{{ old('tempat') }}">
                    <label for="tempat">Tempat Kematian</label>
                    @error('tempat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="dikarenakan" autocomplete="off" class="form-control @error('dikarenakan')
                    is-invalid
                @enderror" id="dikarenakan" placeholder="dikarenakan" required value="{{ old('dikarenakan') }}">
                    <label for="dikarenakan">Penyebab Kematian</label>
                    @error('dikarenakan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="dimakamkan" autocomplete="off" class="form-control @error('dimakamkan')
                    is-invalid
                @enderror" id="dimakamkan" placeholder="dimakamkan" required value="{{ old('dimakamkan') }}">
                    <label for="dimakamkan">Tempat Dimakamkan</label>
                    @error('dimakamkan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <a href="" id="buatSurat" onclick="this.href='/cetak_skk/'+ document.getElementById('nik').value + '/' + document.getElementById('hari').value + '&' + document.getElementById('tanggal').value + '/' + document.getElementById('jam').value + '&' + document.getElementById('tempat').value + '/' + document.getElementById('dikarenakan').value + '&' + document.getElementById('dimakamkan').value" class="mt-3 w-100 btn btn-lg btn-primary" role="button">Buat Surat!</a>
            </form>
        </div>
    </div>
</div>

@endsection