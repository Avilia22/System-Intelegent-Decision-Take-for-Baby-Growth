<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Form Pemeriksaan</title>
  </head>
  <body>
     <div class="container">
      <h2 class="alert alert-primary text-center mt-3">FORMULIR EDIT PEMERIKSAAN PEMERIKSAAN </h2>

      @foreach($pemeriksaan as $p)
      <form action="/data/pemeriksaan/update" method="post">
		{{ csrf_field() }}
    <div class="form-group">
          <label for="id_kms">ID</label><br>
          <input type="number" name="id"  class="form-control"  value="{{ $p->id }}"required="required">
     </div>
    <div class="form-group">
          <label for="tgl_periksa">Tanggal Pemeriksaan</label>
          <input type="date" name="tgl_periksa" class="form-control"  value="{{ $p->tgl_periksa }}"required="required">
     </div>
      <div class="form-group">
          <label for="id_kms">Nomor KMS</label><br>
          <input type="number" name="id_kms" class="form-control" value="{{ $p->id_kms }}"required="required">
     </div>
      <div class="form-group">
          <label for="id_kader">Nomor Induk Kader</label><br>
          <input type="number" name="id_kader"  class="form-control"  value="{{ $p->id_kader }}"required="required">
      </div>
         
        <div class="form-group">
          <label for="berat_badan">Berat Badan (kg) </label><br>
          <input type="number" name="berat_badan" class="form-control"  value="{{ $p->berat_badan }}"required="required">
        </div>

        <div class="form-group">
          <label for="tinggi_badan">Tinggi Badan (cm) </label><br>
          <input type="number" name="tinggi_badan"  class="form-control"  value="{{ $p->tinggi_badan }}"required="required">
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary" >
        </form>
        @endforeach

        </div>
     
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>