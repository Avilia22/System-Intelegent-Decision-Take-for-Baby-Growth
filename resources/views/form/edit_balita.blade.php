<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Form Edit Data Balita</title>
  </head>
  <body>
    <div class="container">
      <h2 class="alert alert-primary text-center mt-3">FORMULIR EDIT DATA BALITA</h2>
      @foreach($balita as $b)
      <form action="/data/balita/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="nama">ID</label>
            <input type="text" name="id" value="{{ $b->id }}"class="form-control" > 
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ $b->nama }}"class="form-control" > 
        </div>

        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" value="{{ $b->tempat_lahir }}"class="form-control" > 
          </div>
        </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $b->tanggal_lahir }}"class="form-control" > 
             </div>
            </div>
          </div>

        <div class="form-group">
            <label for="anak_ke">Anak Ke</label>
            <input type="text" name="anak_ke" value="{{ $b->anak_ke }}"class="form-control" > 
        </div>
        
        <div class="form-group">
          <label>Jenis Kelamin</label><br>
          <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="gender" value="L"{{ $b->gender == 'L' ? 'checked' : ''}}>
            <label>Laki-Laki</label>
          </div>

           <div class="form-check-inline">
           <input type="radio" class="form-check-input" name="gender" value="P"{{ $b->gender == 'P' ? 'checked' : ''}}>
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