<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap</title>
</head>
<body>
    <?php
        $x=10;
        $y=20;
        $temp=0;
        echo "Numbers before swapping: ";
        echo "x=".$x;
        echo "  y=".$y;
        $temp=$x;
        $x=$y;
        $y=$temp;
        echo"<br>";
        echo "Numbers after swapping: ";
        echo "x=".$x;
        echo "  y=".$y;
    ?>
</body>
</html>