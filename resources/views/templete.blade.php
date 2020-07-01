<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN |<b>POSYANDU MANGGA BIMO MARTANI</b></a>
   <div class="icon class ml-4">
      <h5>
      <i class="fas fa-sign-out-alt mr-3"data-toggle="tooltip" title="Sign Out"></i>
      </h5>
    </div>
  </div>

</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pf-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
    <li class="nav-item">
      <a class="nav-link active text-white" href="/dashboard"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/data/balita"><i class="fas fa-baby mr-3"></i>Daftar Balita</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/data/pemeriksaan"><i class="fas fa-balance-scale mr-3"></i>Daftar Pemeriksaan</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/data/status"><i class="fas fa-weight mr-3"></i>Daftar Status Gizi</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/data/kms"><i class="fas fa-notes-medical mr-3"></i>Daftar KMS</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/data/dss_variabel"><i class="fas fa-notes-medical mr-3"></i>DSS Variabel</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/data/dss_hasil"><i class="fas fa-notes-medical mr-3"></i>DSS Hasil</a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/data/dss_keanggotaan"><i class="fas fa-notes-medical mr-3"></i>DSS Keanggotaan</a><hr class="bg-secondary">
    </li>
  </ul>
  </div>
@yield('konten')
</div>
    
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>