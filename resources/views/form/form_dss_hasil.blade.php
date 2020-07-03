<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Form DSS HASIL</title>
  </head>
  <body>
   <div class="container">
      <h2 class="alert alert-primary text-center mt-3">FORMULIR DSS HASIL</h2>

      <form action="/data/dss_hasil/store" method="post">
		    {{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID</lab el>
            <input type="text" name="id" class="form-control" placeholder="Masukan ID " id="id"required="required">
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="nama_variabel">ID Pemeriksaan</label>
          <input type="number" name="id_pemeriksaan" class="form-control"  id="id_pemeriksaan"required="required">
          </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="no_urut">ID Variabel</label>
          <input type="number" name="id_variabel" class="form-control"  id="id_variabel"required="required">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="no_urut">ID Keanggotaan</label>
          <input type="number" name="id_keanggotaan" class="form-control" id="id_keanggotaan"required="required">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="no_urut">Alpha</label>
          <input type="text" name="alpha" class="form-control"  id="alpha"required="required">
          </div>
        </div>
        </div>
          <button type="submit" class="btn btn-primary">SIMPAN</button>
          <button type="reset" class="btn btn-danger">RESET</button>
          </form>

        </div>
      </div>
     <br><br><br><br>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>