<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greatest</title>
</head>
<body>
    <?php
        $arr= array(20,25,90,60,33,5);
        $max= 0;
        echo "Given Numbers are:"
        
        for ($i=0; $i<=(count($arr)-1);$i++)
        {
            if($arr[$i]>$max)
            {
                $max=$arr[$i];
            }
        }
        echo "Greatest Number = ".$max;
    ?>
</body>
</html>