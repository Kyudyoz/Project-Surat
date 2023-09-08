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
            <a class="nav-link active" aria-current="page" href="/">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/panduan">Panduan</a>
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
<img src="{{ asset('img/logo2.png') }}" alt="logo" class="rounded mx-auto d-block my-0">

<div class="container1 pb-4 mt-4">
    <div class="row justify-content-center align-items-center">
        <!-- <div class="col-md-6">
            <div class="mx-3 my-3">
                <a href="/sktm" class="btn btn-dark btn-lg custom-btn">Surat Keterangan Tidak Mampu</a>
            </div>
            <div class="mx-3 my-3">
                <a href="/sku" class="btn btn-dark btn-lg custom-btn">Surat Keterangan Usaha</a>
            </div>
            <div class="mx-3 my-3">
                <a href="/skkr" class="btn btn-dark btn-lg custom-btn">Surat Keterangan Kepemilikan Rumah</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mx-3 my-3">
                <a href="/skd" class="btn btn-dark btn-lg custom-btn">Surat Keterangan Domisili</a>
            </div>

            <div class="mx-3 my-3">
                <a href="/skk" class="btn btn-dark btn-lg custom-btn">Surat Keterangan Kematian</a>
            </div>
            <div class="mx-3 my-3">
                <a href="/skj" class="btn btn-dark btn-lg custom-btn">Surat Keterangan Janda/Duda</a>
            </div>

        </div> -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="/img/SKTM.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Surat Keterangan Tidak Mampu</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="mx-3 my-3">
                <a href="/sktm" class="btn btn-dark btn-lg custom-btn">Buat SKTM</a>
            </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card h-100">
      <img src="/img/SKU.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Surat Keterangan Usaha</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="mx-3 my-3">
                <a href="/sku" class="btn btn-dark btn-lg custom-btn">Buat SKU</a>
            </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="/img/SKKR.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Surat Keterangan Kepemilikan Rumah</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="mx-3 my-3">
                <a href="/skkr" class="btn btn-dark btn-lg custom-btn">Buat SKKR</a>
            </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="/img/SKD.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Surat Keterangan Domisili</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="mx-3 my-3">
                <a href="/skd" class="btn btn-dark btn-lg custom-btn">Buat SKD</a>
            </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="/img/SKK.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Surat Keterangan Kematian</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="mx-3 my-3">
                <a href="/skk" class="btn btn-dark btn-lg custom-btn">Buat SKK</a>
            </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="/img/SKJ.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Surat Keterangan Janda/Duda</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="mx-3 my-3">
                <a href="/skj" class="btn btn-dark btn-lg custom-btn">Buat SKJ/D</a>
            </div>
    </div>
  </div>
</div>
    </div>
</div>


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
