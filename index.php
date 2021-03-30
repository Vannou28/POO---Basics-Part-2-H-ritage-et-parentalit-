<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<?php require_once ('Car.php');?>    
<?php require_once ('Bicycle.php');?>
<?php require_once ('Truck.php');?>
<?php

$bike= new Bicycle('blue',1);


// Moving bike
echo $bike->forward();
var_dump($bike);

$car = new Car('green', 4, 'fuel');
echo $car->forward();
var_dump($car);


$camionVolvo = new Truck('blue', 4, 30,'fuel');
echo $camionVolvo->forward();
var_dump($camionVolvo);

echo $camionVolvo->checkLoad();


?>    
   
</body>
</html>