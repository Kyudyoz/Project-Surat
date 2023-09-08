@extends('layouts.main')

@section('navbar')
<nav class="navbar bg-body-tertiary sticky-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/img/logo2.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
  </a>
  <a><b>TENTANG</b></a>
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
            <a class="nav-link" href="/panduan">Panduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/tentang">Tentang</a>
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
  <img src="{{ asset('img/logo2.png') }}" alt="logo" class="rounded mx-auto d-block my-0 pb-4 pt-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">PROFIL</h4>
        <p class="card-text "><b>TANDA.RT</b> adalah website pencetak surat keterangan tingkat RT. Website ini hadir untuk memudahkan warga untuk membuat surat tersebut. Hanya dengan mengisikan data NIK dan atau data lainnya, warga langsung dapat mencetak surat.
        Sebelum itu, pastikan bahwa data diri anda telah terdaftar pada lingkungan RT anda. Jika data telah terdaftar, barulah anda dapat menggunakan website ini.</p>
      </div>
      <br><br><br>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">VISI & MISI</h4>
        <p class="card-text">
          <b>VISI</b> <br>Menjadi sumber terpercaya dan efisien untuk memfasilitasi pembuatan Surat Keterangan Tingkat RT secara cepat dan tepat.
        </p>
        <b>MISI</b>
        <ol>
          <li>
            Membantu Warga dalam Pengurusan Surat Keterangan. Menyediakan platform yang memudahkan warga untuk mengajukan permohonan Surat Keterangan Tingkat RT dengan proses yang sederhana dan cepat.
          </li>

          <li>
            Peningkatan Keterbukaan dan Transparansi. Menyediakan informasi yang jelas tentang persyaratan dan prosedur.
          </li>

          <li>
            Kualitas Layanan yang Unggul. Memastikan pelayanan yang cepat dan berkualitas dengan dukungan dari petugas RT yang kompeten dan responsif.
          </li>
          <li>
            Keamanan dan Kepercayaan. Mengamankan data pribadi warga dengan baik serta menjaga kerahasiaan informasi yang diajukan dalam proses pengajuan Surat Keterangan Tingkat RT.
          </li>
          <li>
            Teknologi. Terus mengembangkan dan memperbarui teknologi dan fitur website untuk meningkatkan efisiensi dan kenyamanan pengguna.
          </li>

          <li>
            Pemberdayaan Masyarakat. Memberikan edukasi tentang pentingnya Surat Keterangan Tingkat RT dan peran mereka dalam pembuatan serta penggunaannya.
          </li>
        </ol>
      </div>
      <br>
    </div>
  </div>
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
