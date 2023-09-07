@extends('layouts.main')

@section('navbar')
<nav class="navbar bg-body-tertiary sticky-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/img/logo2.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
  </a>
  <a><b>SELAMAT DATANG WARGA KU TERCINTA</b></a>
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
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
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
