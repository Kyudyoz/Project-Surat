@extends('layouts.main')
<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/img/logo2.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
  </a>
  <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
    </div>
      <i class="fa-solid fa-right-to-bracket fa-2xl"></i> <small class="hilang"> Hai, selamat datang!</small>
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
