<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Form Status Gizi</title>
  </head>
  <body>
   <div class="container">
      <h2 class="alert alert-primary text-center mt-3">FORMULIR STATUS GIZI</h2>

      <form action="/data/status/store" method="post">
		    {{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control" placeholder="Masukan ID " id="id"required="required">
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="id">Status Gizi</label>
          <input type="text" name="status_gizi" class="form-control" placeholder="Masukan status gizi" id="status_gizi"required="required">
          </div>
        </div>
          </div>      
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="id">Score</label>
          <input type="number" name="score" class="form-control" placeholder="Masukan score" id="score"required="required">
          </div>
        </div>
          </div>  
          <div class="form-group">
          <label>Jenis Kelamin</label><br>
          <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="L">
            <label>Laki-Laki</label>
          </div>

           <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="P">
            <label>Perempuan</label>
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