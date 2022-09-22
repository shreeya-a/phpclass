<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial using Recursion</title>
</head>
<body>
    <?php
        $num=4;
        if ($num<0)
        {
            echo "Factorial of negative number is not possible.";
        }
        else
        {
            echo factorial($num);
        }
        function factorial($num)
        {
            if ($num<=1)
            {
                return 1;
            }
            else
            {
                return ($num* factorial($num-1));
            }
        }
    ?>
</body>
</html>