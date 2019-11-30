<?php
//check tombol submit

require 'function.php';

 $conn= mysqli_connect("localhost","root","","phpdasar");
if(isset($_POST["submit"]) ){
     
        

         //cek apakah data berhasil 
      if(tambah($_POST)>0){
          echo "data berhasil nambah";
      }else{
          echo"data gagal nambah";
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp">

            </li> 
            <li>
                <label for="nrp">Nama:</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">NRP:</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data </button>
            </li>
        </ul>
    </form>
</body>
</html>