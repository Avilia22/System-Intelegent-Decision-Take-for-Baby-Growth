

@extends('templete')
  
  @section('konten')

  <div class="col-md-10 p-5 pt-2">
  <h3><i class="fas fa-baby mr-3"></i>DAFTAR KMS</h3><hr>

  <a href= "{{ url('form/form_kms')}}" class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>TAMBAH DAFTAR KMS</a>
  <form action="/data/kms/cari" method="GET">
	  <input type="text" name="cari" placeholder="Cari id kms " value="{{ old('cari') }}">
	  <input type="submit" value="CARI"button class="btn btn-outline-success my-2 my-sm-0">
</form><br>
  <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">id_balita</th>
      <!-- <th scope="col">Nama Balita</th> -->
      <th colspan="3" scope="col">AKSI</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $no=1;
  ?>
  @foreach($kms as $k)
    <tr>
      <td>{{$no++}}</td>
      <td>{{ $k->id }}</td>
      <td>{{ $k->id_balita }}</td>
      <td><a href="" class="btn btn-primary">Detail</a></td>
      <td><a href="/form/edit_kms/{{ $k->id }}" class="btn btn-primary">Edit</a></td>
      <td><a href="/data/kms/hapus_kms/{{ $k->id }}" class="btn btn-primary">Hapus</a></i></td>
    </tr>
    @endforeach
  </tbody>
</table>
 
  </div>
</div>
@endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>