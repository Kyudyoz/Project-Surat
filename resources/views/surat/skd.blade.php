@extends('layouts.main')
@section('container')
<div class="container1">
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Surat Keterangan Domisili</h2>
            
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
                    <input type="text" name="tinggal" autocomplete="off" class="form-control @error('tinggal')
                    is-invalid
                @enderror" id="tinggal" placeholder="tinggal" required value="{{ old('tinggal') }}">
                    <label for="tinggal">Tinggal di rumah</label>
                    @error('tinggal')
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
                <a href="" id="buatSurat" onclick="this.href='/cetak_skd/'+ document.getElementById('nik').value + '/' + document.getElementById('tinggal').value + '&' + document.getElementById('keperluan').value" class="mt-3 w-100 btn btn-lg btn-primary" role="button">Buat Surat!</a>
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