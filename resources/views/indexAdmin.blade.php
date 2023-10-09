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
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="books">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="indexAdmin">HomeAdmin</a>
              </li>
              <li class="navbar-nav">
                <a href="dataPreview" class="nav-link">Data Buku</a>
              </li>
            </ul>
          </div>
        </div>
        </nav>

        <div class="container mt-5">
        <div class="container">
        <form action='/insertData' method='post' enctype="multipart/form-data">
          @csrf
          <div class="my-3 p-3 bg-body rounded shadow-sm">
              <div class="mb-3 row">
                <h1 class="text-center my-4">Buku Baru</h1>
                  <label for="Judul" class="col-sm-2 col-form-label">Judul Buku</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name='judul' id="nim">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="harga" class="col-sm-2 col-form-label">Harga Buku</label>
                  <div class="col-sm-10">
                      <input type="number" class="form-control" name='harga' id="nama">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="jumlah_halaman" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                  <div class="col-sm-10">
                      <input type="number" class="form-control" name='jumlah_halaman' id="jurusan">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="tanggal_terbit" class="col-sm-2 col-form-label">tanggal Terbit</label>
                  <div class="col-sm-10">
                      <input type="date" class="form-control" name='tanggal_terbit' id="jurusan">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name='penerbit' id="jurusan">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name='penulis' id="jurusan">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="img" class="col-sm-2 col-form-label">Gambar Cover</label>
                  <div class="col-sm-10">
                      <input type="file" class="form-control" name='img' id="jurusan">
                  </div>
              </div>
              <div class="mb-3 row">
                  <button type="submit" class="btn btn-primary" >SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
        <div class="footer">
          <footer class="py-3 my-4">
            <hr>
            <p class="text-center text-muted">© 2023 HavizsCompany, Inc</p>
          </footer>
        </div>
        </div>
  </body>
</html>