<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ URL::asset('/img/surat.png') }}" type="image/png">
    <script src="https://kit.fontawesome.com/057baadc3d.js" crossorigin="anonymous"></script>

    <title>Surat</title>
    <style>
        .custom-btn {
            width: 100%;
        }
        body {
        background-color: #FFF6D4 ; 
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        min-height: 100vh;
    }
    </style>
</head>
<body>
    
    <div class="container mt-4">
        <img src="{{ asset('img/logo2.png') }}" alt="logo" class="rounded mx-auto d-block my-0">
        @yield('container')
    </div>

    
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
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
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>