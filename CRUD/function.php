<?php
// koneksi database
$conn = mysqli_connect("localhost","root","", "phpdasar");


function query ($query){
    global $conn;
    $result =mysqli_query($conn,$query);
    $rows =[];
    while ($row=mysqli_fetch_assoc($result) ){
        $rows[]=$row;
    }
    return $rows;
}


function tambah($data){
    $nrp= $data["nrp"];
    $nama= $data["nama"];   
    $email= $data["email"];
    $jurusan= $data["jurusan"];
    $gambar= $data["gambar"];
        
}
 //query insert data
 $query= "INSERT INTO  mahasiswa
 VALUES
 ('','$nrp','$nama','$email','$jurusan','$gambar')
 ";

mysqli_query($conn, $query);
return mysqli_affected_rows($conn);

?>


