<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
<?php
    $a = 6;
    // while ($a<10) {
    //     // echo $a;
    //     $a ++;
    //     echo $a;
    // }
    while ($a < 100) {
        $a +=10;
        if ($a==9) continue;
        echo $a;
    }
    for ($x=0;$x<=10;$x++) {
        if ($x==4) break ;
        echo "The number is $x <br>";
    }
    $fruits = array("Mango","Apple","Orange","WaterMelon");
    foreach($fruits as $x) {
        echo $x ,"<br>";
    }

    $profile = array("Sane"=>"21","Sterling"=>"23","Jesus"=>"19","Aguero"=>"26");

    foreach($profile as $x => $y) {
        echo "$x : $y <br>";
    }

    $colors = array ("Red","Yellow","Green","Orange","Purple","Grey");
    foreach($colors as $a) {
        if ($a == "Yellow") break;
        echo "$a <br>";
    }

    foreach($colors as $b) {
        if ($b == "Yellow") $b = "Pink";
        // echo "$b <br>";
    }
    var_dump($colors);

    // Introducing & will result in a change in the array
    foreach($colors as & $b) {
        if ($b == "Yellow") $b = "Pink";
        // echo "$b <br>";
    }
    var_dump($colors);
?>