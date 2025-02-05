<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 66;
    $b = 21;
    $c = 28;
    $d = "66";
    echo ($a + $b) , "<br>";
    echo  ($a - $c) , "<br>";
    echo ($a**$b) , "<br>";

    // Comparison operators
    var_dump($a==$b);
    var_dump($a == $d);
    var_dump($a===$d); 
    var_dump($a != $d);
    var_dump($a>=$b);

    if ($a==66 and $b ==21) {
        echo "Yes","<br>";
    }
    if ($a==66 or $b ==41) {
        echo "Yes" , "<br>";
    }
    if ($a==66 xor $b ==21) {
        echo "Yes" , "<br>";
    }
    else {
        echo "That is False <br>";
    }
    echo $a . $b ;
    ?>
</body>
</html>