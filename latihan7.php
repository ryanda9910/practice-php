<?php
    
$students=[
["Aldo","121212","Information Systems","ryandaaldo@gmai.com" ],
["Budi","1434343","Computer Science","Budi2gmail.com"],
["Israel","45345345","Computer Engginer","iSrael@gmail.com"]

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>list Of Students</h1>
    <?php foreach ($students as $student):?>
    <ul>
        <li><?=$student[0];?></li>
        <li><?=$student[1];?></li>
        <li><?=$student[2];?></li>
        <li><?=$student[3];?></li>
    </ul>
</body>
    <?php endforeach; ?>
</html>
