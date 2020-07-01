<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Form EDIT DSS KEANGGOTAAN</title>
  </head>
  <body>
   <div class="container">
      <h2 class="alert alert-primary text-center mt-3">FORMULIR EDIT DSS KEANGGOTAAN</h2>
      @foreach($dss_keanggotaan as $k)
      <form action="/data/dss_keanggotaan/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID</lab el>
            <input type="text" name="id" class="form-control" placeholder="Masukan ID " value="{{ $k->id }}"required="required">
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="nama_variabel">Batas Bawah</label>
          <input type="number" name="batas_bawah" class="form-control" placeholder="Masukan batas bawah" value="{{ $k->batas_bawah }}"required="required">
          </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="no_urut">Batas Tengah</label>
          <input type="number" name="batas_tengah" class="form-control" placeholder="Masukan batas tengah" value="{{ $k->batas_tengah }}"required="required">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="no_urut">Batas Atas</label>
          <input type="number" name="batas_atas" class="form-control" placeholder="Masukan batas atas" value="{{ $k->batas_atas }}"required="required">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="no_urut">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" placeholder="Masukan keterangab" value="{{ $k->keterangan }}"required="required">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="no_urut">ID variabel</label>
          <input type="number" name="id_variabel" class="form-control" placeholder="Masukan id variabel" value="{{ $k->id_variabel }}"required="required">
          </div>
        </div>
        </div>
          <button type="submit" class="btn btn-primary">SIMPAN</button>
          <button type="reset" class="btn btn-danger">RESET</button>
          </form>
@endforeach
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