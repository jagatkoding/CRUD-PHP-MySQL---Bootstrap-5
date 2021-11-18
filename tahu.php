<?php
    include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- link download : https://getbootstrap.com/docs/5.0/getting-started/download/ -->

    <!-- Fontawesome -->
    <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- link download : https://fontawesome.com/v4.7/get-started/ -->

    <title>CRUD - Jagat Koding</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            CRUD - BS5
            </a>        
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-5">Data Siswa</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data yang telah disimpan pada database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD - <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="kelola_data.php" class="btn btn-sm btn-primary">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        <p></p>

        <div class="table-responsive">
            <table id="tabel" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
    </div>
    
  </body>
</html>