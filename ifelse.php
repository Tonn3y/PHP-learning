<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    $y =  11;
    if($x==5 | $y==7) {
        echo ($x + $y)." is the answer <br> ";
    }
    else {
        echo "That is false <br>";
    }
    if ($x==2|$x==3|$x==4|$x==5|$x==6|$x==7|$x==8|$x==9|$x==10) {
        echo "$x is between 2 and 10 <br>";
    }
    else {
        echo "$x is not between 2 and 10 <br>";
    }

    $t = date("H");

    if ($t<12) {
        echo "Good Morning!";
    }
    elseif ($t<15) {
        echo "Good Afternoon!";
    }
    elseif ($t<19) {
        echo "Good Evening!";
    }
    else {
        echo "Good Night!";
    }
    ?>
</body>
</html>