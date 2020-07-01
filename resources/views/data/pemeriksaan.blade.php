<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

@extends('templete')
  
  @section('konten')

  <div class="col-md-10 p-5 pt-2">
  <h3><i class="fas fa-balance-scale mr-3"></i>DAFTAR PEMERIKSAAN</h3><hr>

  <a href="{{ url('form/form_pemeriksaan')}}"class="btn btn-primary mb-3"><i class="fas fa-plus-circle mr-2"></i>TAMBAH DAFTAR PEMERIKSAAAN </a>
  <form action="/data/kms/cari" method="GET">
	  <input type="text" name="cari" placeholder="Cari id pemeriksaan " value="{{ old('cari') }}">
	  <input type="submit" value="CARI"button class="btn btn-outline-success my-2 my-sm-0">
</form><br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">N0 KMS</th>
      <th scope="col">N0 KADER</th>
      <th scope="col">BB(kg)</th>
      <th scope="col">TB(cm)</th>
      <th colspan="3" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $no=1;
  ?>
  @foreach($pemeriksaan as $p)
    <tr>
      <td>{{$no++}}</td>
      <td>{{ $p->id }}</td>
      <td>{{ $p->tgl_periksa }}</td>
      <td>{{ $p->id_kms }}</td>
      <td>{{ $p->id_kader }}</td>
      <td>{{ $p->berat_badan }}</td>
      <td>{{ $p->tinggi_badan }}</td>
      <td><a href="/data/pemeriksaan_detail" class="btn btn-primary">Detail</a></td>
      <td><a href="/form/edit_pemeriksaan/{{ $p->id }}" class="btn btn-primary">Edit</a></td>
      <td><a href="/data/pemeriksaan/hapus_pemeriksaan/{{ $p->id }}" class="btn btn-primary">Hapus</a></i></td>
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