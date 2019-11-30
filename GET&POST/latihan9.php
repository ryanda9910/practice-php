<?php

if( !isset ($_GET["name"]) ||
 !isset ($_GET["name"]) ||
 !isset ($_GET["name"])) {


    header("Location:latihan8.php");
    exit;
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET </title>
</head>
<body>
 <h1> List of student </h1>   


 <ul>
     <li><?=$_GET["name"];?></li>      
     <li><?=$_GET["major"]; ?></li> 
     <li><?=$_GET["email"]; ?></li> 
 </ul>

</body>



 <a href="latihan8.php">Back

</html>