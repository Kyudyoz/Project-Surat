@extends('layouts.main')
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
            <a class="nav-link active" aria-current="page" href="/index.php">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Panduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

@section('container')
<div class="container1 pb-4 mt-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
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
            
        </div>
    </div>
</div>
@endsection
