<?php
    
$students=[

["npm"=>10232132,
"name"=>"Aldo",
"major"=>"Information systems",
"email"=>"ryandaaldo@gmail.com"],

["npm"=>12123423,
"name"=>"Budi",
"major"=>"Computer Science",
"email"=>"budi@gmail.com"],

["npm"=>13433434,
"name"=>"Israel",
"major"=>"Computer Enginner",
"email"=>"israel.com"],

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
    <h1>Portal </h1>
    <?php  foreach($students as $student):?>
    <ul>
        <li><a href="latihan9.php?name=<?= $student["name"];?>
        &npm =<?=$student["npm"];?>&email=<?=$student["email"];?>
        &major=<?=$student["major"];?>"><?= $student["name"];?></li>
    </ul>
</body>
<?php endforeach; ?>
</html>