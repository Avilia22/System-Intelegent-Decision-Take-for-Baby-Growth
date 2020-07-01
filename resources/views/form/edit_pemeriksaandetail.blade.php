<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Form Edit Pemeriksaan Detail</title>
  </head>
  <body>
     <div class="container">
      <h2 class="alert alert-primary text-center mt-3">FORMULIR EDIT PEMERIKSAAN DETAIL </h2>

      @foreach($detail as $d)
      <form action="/data/pemeriksaan_detail/update" method="post">
		{{ csrf_field() }}
    <div class="form-group">
          <label for="id">ID</label><br>
          <input type="number" name="id"  class="form-control" value="{{ $d->id }}"required="required">
     </div>
    <div class="form-group">
          <label for="id_pemeriksaan">id pemeriksaan</label>
          <input type="number" name="id_pemeriksaan" class="form-control" value="{{ $d->id_pemeriksaan }}"required="required">
     </div>
      <div class="form-group">
          <label for="zscore_total">zscore total</label><br>
          <input type="number" name="zscore_total" class="form-control" value="{{ $d->zscore_total }}"required="required">
     </div>
      <div class="form-group">
          <label for="status_pemeriksaan">Status Pemeriksaan</label><br>
          <input type="text" name="status_pemeriksaan"  class="form-control" value="{{ $d->status_pemeriksaan }}"required="required">
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