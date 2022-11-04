<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <?php
        $n=71;
        $count=0;
        for ($i=1; $i<=$n;$i++)
        {
            if ($n%$i==0)
            {
                $count++;
            }
        }
        if($count==2)
        {
            echo $n. " is a prime number";
        }
        else
        {
            echo $n. " is not a prime number";
        }
        $num=72;
        $count1=0;
        echo"<br>";
        for ($i=1; $i<=$num;$i++)
        {
            if ($num % $i==0)
            {
                $count1++;
            }
        }
        if($count1==2)
        {
            echo $num. " is a prime number";
        }
        else
        {

            echo $num. " is not a prime number";
        }

    ?>
</body>
</html>