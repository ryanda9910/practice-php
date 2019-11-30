<?php
$numbers=[1,1,23,4,5565,676];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .kotak{
             width: 50px;
             height: 50px;
             background-color:orange;
             text-align: center;
             line-height: 50px;
             margin:3px;
             float:left;
             transition:1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius:50%;
        }
        .clear{clear:both;}
    </style>
</head>
<body>

    <div class="clear"></div>
    <?php foreach ($numbers as $number){?>
        <div class="kotak"><?php echo $number; ?></div>
   <?php } ?> 

   <div class="clear"></div>
   <?php foreach ($numbers as $number):?>
    <div class="kotak"><?= $number; ?></div>
   <?php endforeach; ?>
   
</body > 
</html>