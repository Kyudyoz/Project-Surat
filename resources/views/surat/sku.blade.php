@extends('layouts.main')
@section('container')
<div class="container1 my-4" style="padding-bottom: 5%">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Surat Keterangan Usaha</h2>
            
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
                    <input type="text" name="keperluan" autocomplete="off" class="form-control @error('keperluan')
                    is-invalid
                @enderror" id="keperluan" placeholder="keperluan" required value="{{ old('keperluan') }}">
                    <label for="keperluan">Keperluan</label>
                    @error('keperluan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="usaha" autocomplete="off" class="form-control @error('usaha')
                    is-invalid
                @enderror" id="usaha" placeholder="usaha" required value="{{ old('usaha') }}">
                    <label for="usaha">Usaha</label>
                    @error('usaha')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <div class="form-floating text-dark text-muted">
                    <input type="text" name="nama_usaha" autocomplete="off" class="form-control @error('nama_usaha')
                    is-invalid
                @enderror" id="nama_usaha" placeholder="nama_usaha" required value="{{ old('nama_usaha') }}">
                    <label for="nama_usaha">Nama Usaha</label>
                    @error('nama_usaha')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror  
                </div>
                <a href="" id="buatSurat" onclick="this.href='/cetak_sku/'+ document.getElementById('nik').value + '/' + document.getElementById('keperluan').value + '/' + document.getElementById('usaha').value + '&' + document.getElementById('nama_usaha').value" class="mt-3 w-100 btn btn-lg btn-primary" role="button">Buat Surat!</a>
            </form>
        </div>
    </div>
</div>

{{-- <script>
    // Fungsi untuk memeriksa apakah semua field telah terisi
    function checkFields() {
        var nikValue = document.getElementById('nik').value;
        var tinggalValue = document.getElementById('tinggal').value;
        var keperluanValue = document.getElementById('keperluan').value;

        // Mengaktifkan tombol jika semua field telah terisi
        if (nikValue && tinggalValue && keperluanValue) {
            document.getElementById('buatSurat').removeAttribute('disabled');
        } else {
            document.getElementById('buatSurat').setAttribute('disabled', 'disabled');
        }
    }

    // Menjalankan fungsi checkFields setiap kali ada perubahan pada input
    document.getElementById('nik').addEventListener('input', checkFields);
    document.getElementById('tinggal').addEventListener('input', checkFields);
    document.getElementById('keperluan').addEventListener('input', checkFields);
</script> --}}
@endsection