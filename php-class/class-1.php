<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <h1 style="text-align: center">Class and Object</h1>

  
</body>
</html>

<?php

    class Car{
        public $speed = 10;
        public $color= 'blue ';
        public $gas ='disel ';
        public $position = 100;
        public $name;

        // function __construct($name)
        // {
        //     $this->name=$name;
        // }

        function move()
        {
            echo "<br>";
            echo "I got moves, with current speed: " .$this->speed;
        }
    }

 

    $car = new Car;
    echo $car->name='car: ';
    echo $car->speed;
    echo "<br>";
    echo $car->speed=300;
    echo "<br>";
    echo "<br>";

    $tesla = new Car;
    echo $tesla->name='tesla: ';
    echo $tesla->color;
    echo $tesla->move();
    echo "<br>";
    echo "<br>";

    $nano = new Car;
    echo $nano->name='nano: ';
    echo $tesla->color='yellow ';
    echo $nano ->gas;
    echo "<br>";
    echo "<br>";

    // ---- for constructor-----
    // $car2 = new Car('car2');
    // echo $car2->name;
    // echo $car2->speed;

    
 
?>