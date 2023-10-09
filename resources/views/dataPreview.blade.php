<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Havizs Books</title>
    <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Havizs Books</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="books">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indexAdmin">HomeAdmin</a>
              </li>
              <li class="navbar-nav">
                <a class="nav-link  active" href="dataPreview">Data Buku</a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
          <!-- START DATA -->
          <div class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h1 class="text-center">Data Buku</h1>
                    <!-- FORM PENCARIAN -->
                    <div class="pb-3">
                      <form class="d-flex" action="" method="get">
                          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                          <button class="btn btn-secondary" type="submit">Cari</button>
                      </form>
                    </div>
                    
                    <!-- TOMBOL TAMBAH DATA -->
                    <div class="pb-3">
                      <a href='indexAdmin' class="btn btn-primary">+ Tambah Data</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Judul Buku</th>
                                <th class="col-md-2">Harga Buku</th>
                                <th class="col-md-2">Jumlah Halaman</th>
                                <th class="col-md-2">Tanggal Terbit</th>
                                <th class="col-md-2">penerbit</th>
                                <th class="col-md-2">Penulis</th>
                                <th class="col-md-2">Cover Buku</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $row)
                                <tr>
                                <th scope="row">{{$row->id}}</th>
                                <td>{{$row->judul}}</td>
                                <td>{{$row->harga}}</td>
                                <td>{{$row->jumlah_halaman}}</td>
                                <td>{{$row->tanggal_terbit}}</td>
                                <td>{{$row->penerbit}}</td>
                                <td>{{$row->penulis}}</td>
                                    <td><img style="width:50px;"class="img-thumbnail" src="img/bumi.jpg" alt="">{{$row->img}}</td>
                                    <td>
                                        <a href="/tampilkanData/{{$row->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href='' class="btn btn-danger btn-sm">Del</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>

                    </table>
                  
              </div>
        </div>
                  
      </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>