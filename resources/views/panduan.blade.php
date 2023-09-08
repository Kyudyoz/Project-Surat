@extends('layouts.main')

@section('navbar')
<nav class="navbar bg-body-tertiary sticky-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/img/logo2.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
  </a>
  <a><b>PANDUAN</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Daftar Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link "  href="/">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/panduan">Panduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tentang">Tentang</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
@endsection

@section('container')

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="/img/Website.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Langkah 1: Akses Website</h5>
        <ol>
          <li>
            Buka peramban web (browser) favorit Anda, seperti Google Chrome atau Mozilla Firefox.
          </li>
          <li>
            Ketik alamat URL website pembuat surat pengantar tingkat RT yakni TANDA.RT di bilah alamat peramban dan tekan "Enter."
          </li>
        </ol>
        <br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="/img/Surat2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Langkah 2: Membuat Surat Pengantar RT</h5>
        Setelah Anda mengakses website, Anda dapat mulai membuat surat pengantar RT:
    <ol>
      <li>
      Pilih jenis surat yang tertera di beranda atau halaman utama. Tekan “Buat”.
      </li>
      <li>
      Sebelum ketahap berikutnya, pastikan bahwa data kependudukan anda telah didaftarkan pada lingkungan tempat tinggal anda.
      </li>
      <li>
      Isi formulir atau kotak teks yang ada dengan informasi yang diperlukan, seperti NIK, keperluan, dan lain sebaginya sesuai jensi surat yang ingin dibuat.
      </li>
      <li>
      Pastikan Anda mengisi semua informasi yang diperlukan dan periksa ulang agar tidak ada kesalahan.
      </li>
      <li>
      Klik tombol "Buat Surat" atau "Generate" untuk menghasilkan surat pengantar RT.
      </li>
    </ol>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="/img/Preview.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Langkah 3: Preview dan Unduh</h5>
        <ol>
          <li>
          Setelah surat pengantar selesai dibuat, Anda akan melihat pratinjau surat pengantar tersebut di layar.
          </li>
          <li>
          Periksa dengan cermat untuk memastikan semua informasi benar dan sesuai.
          </li>
          <li>
          Jika semuanya sudah sesuai, klik tombol "Unduh" atau "Cetak" untuk menyimpan surat pengantar dalam format yang sesuai, seperti PDF.
          </li>
        </ol>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="/img/Selesai.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Langkah 4: Selesai</h5>
        <ol>
          <li>
          Surat pengantar RT telah berhasil dibuat dan diunduh. Anda dapat mencetaknya sesuai dengan kebutuhan Anda.
          </li>
          <li>
          Jika Anda perlu membuat surat pengantar baru, Anda dapat mengulangi langkah-langkah di atas.
          </li>
        </ol>
        <br><br><br>
      </div>
    </div>
  </div>
</div>
</p>
<br>
<div class="col">
    <div class="card text-white bg-danger">
      <div class="card-body">
        <h5 class="card-title">Catatan Penting:</h5>
          <li>
          Pastikan untuk mengikuti instruksi yang ada di website dan mematuhi kebijakan privasi yang berlaku.
          </li>
          <li>
          Simpan salinan digital atau fisik dari surat pengantar RT yang Anda buat untuk referensi di masa mendatang.
          </li>
      </div>
    </div>
  </div>
  <br>

@endsection


@section('footer')
<!-- Footer -->
<footer class="footer text-center text-lg-start bg-white text-muted">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-4">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-5 mx-auto mb-4 mt-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              Tanda.RT
            </h6>
            <p>
              Website pencetak surat keterangan tingkat RT. Membantu urusan anda dengan Cepat dan Tepat.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mx-auto mb-4 mt-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Program
            </h6>
            <p>
              <a href="/sktm" class="text-reset">Surat Keterangan Tidak Mampu</a>
            </p>
            <p>
              <a href="/sku" class="text-reset">Surat Keterangan Usaha</a>
            </p>
            <p>
              <a href="/skkr" class="text-reset">Surat Keterangan Kepemilikan Rumah</a>
            </p>
            <p>
              <a href="/skd" class="text-reset">Surat Keterangan Domisili</a>
            </p>
            <p>
              <a href="/skk" class="text-reset">Surat Keterangan Kematian</a>
            </p>
            <p>
              <a href="skj" class="text-reset">Surat Keterangan Janda/Duda</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mx-auto mb-md-0 mb-4 mt-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Jambi 36613, Indonesia</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              tandart@gmail.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 621234567891</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 622345678912</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright:
      <b class="text-reset fw-bold">TANDA.RT</b>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection
