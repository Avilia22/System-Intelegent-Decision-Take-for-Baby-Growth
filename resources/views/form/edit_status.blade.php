<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Form EditStatus Gizi</title>
  </head>
  <body>
    <div class="container">
      <h2 class="alert alert-primary text-center mt-3">FORMULIR EDIT STATUS GIZI</h2>
      @foreach($status as $s)
      <form action="/data/status/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" value="{{ $s->id }}"class="form-control" > 
        </div>
        <div class="form-group">
            <label for="nama">Status Gizi</label>
            <input type="text" name="status_gizi" value="{{ $s->status_gizi }}"class="form-control" > 
        </div>
        <div class="form-group">
            <label for="nama">Scorei</label>
            <input type="text" name="score" value="{{ $s->score }}"class="form-control" > 
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label><br>
          <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="L"{{ $s->jenis_kelamin == 'L' ? 'checked' : ''}}>
            <label>Laki-Laki</label>
          </div>

           <div class="form-check-inline">
           <input type="radio" class="form-check-input" name="jenis_kelamin" value="P"{{ $s->jenis_kelamin == 'P' ? 'checked' : ''}}>
            <label>Perempuan</label>
          </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary" >
        </div>
      </form>
      @endforeach

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>