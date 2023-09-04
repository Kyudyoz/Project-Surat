@extends('layouts.main')
@section('container')
<div class="container1 my-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Surat Keterangan Janda/Duda</h2>
            
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
                    <select name="cerai" id="cerai" class="form-select form-select-md @error('cerai') is-invalid @enderror">
                        <option hidden selected disabled>Jenis Cerai</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                    </select>
                    <label for="pasangan">Nama Suami/Istri</label> 
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="pasangan" autocomplete="off" class="form-control @error('pasangan')
                    is-invalid
                @enderror" id="pasangan" placeholder="pasangan" required value="{{ old('pasangan') }}">
                    <label for="pasangan">Nama Suami/Istri</label>
                    @error('pasangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <a href="" id="buatSurat" onclick="this.href='/cetak_skj/'+ document.getElementById('nik').value + '/' + document.getElementById('cerai').value + '&' + document.getElementById('pasangan').value" class="mt-3 w-100 btn btn-lg btn-primary" role="button">Buat Surat!</a>
            </form>
        </div>
    </div>
</div>

@endsection