<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head> 
  <body>
  <h3>Halaman pendaftaran</h3>
  <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <form method="post" action="simpan.php">
                        <div class=" form-group row ">
                            <label for="nama" class="col-sm-2 col-form-label ">Nama</label>
                            <div class="col-sm-10 ">
                                <input type="text" name="nama" class="form-control" >
                            </div>
                        </div>
                        <div class=" form-group row ">
                            <label for="kelas" class="col-sm-2 col-form-label ">Kelas</label>
                            <div class="col-sm-10 ">
                                <input type="text" name="kelas" class="form-control" >
                            </div>
                        </div>
                        <div class=" form-group row ">
                            <label for="alamat" class="col-sm-2 col-form-label ">Alamat</label>
                            <div class="col-sm-10 ">
                                <input type="text " name="alamat" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-10 ">
                                <button type="submit" name="Submit" class="btn btn-primary ">Simpan</button>
                                <span><a href="cetak.php" class="btn btn-danger">Batal</a></span>
                            </div>
                        </div>
  </body>
</html>