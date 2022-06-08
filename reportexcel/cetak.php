
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman cetak data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
.btn {
    margin-top: 20px;
    
}

</style>
  </head> 
  <body>
      <h1>Cetak data</h1>
<?php 
include "koneksi.php"; 
$sql="select * from tb_siswa order by nama;"; 
$query=mysqli_query($koneksi, $sql) or die("Proses cetak gagal"); 
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'> 
<tr> 
<th>Id Siswa</th>  
<th>Nama</th> 
<th>Kelas</th> 
<th>Alamat</th> 
<th></th>"; 
$no=1; 
while($hasil=mysqli_fetch_row($query)){  
echo "<tr> 
<td>$hasil[0]</td> 
<td>$hasil[1]</td> 
<td>$hasil[2]</td> 
<td>$hasil[3]</td> 
</tr>"; 
$no++; 
} 
echo "</table>"; 
?> 

<a class="btn btn-secondary active" href="daftar.php">Tambah Siswa
Baru</a>
<a class="btn btn-secondary active" href="reportdataexcel.php">Cetak
Excel</a>
</body>
</html>