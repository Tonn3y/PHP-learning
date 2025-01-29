<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
    $a = 37;
    $b = 37.2;
    $c = "The weather today is chilly <br>";
    $d = ["Khusanov","Omar Marmoush","Vitor Reis <br>"];
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);

    if(in_array("Khusanov",$d)) {
        echo "Yes Khusanov is among the new signings <br>";
    }
    else {
        echo "Khusanov is not among the new signings <br>";
    }
    ?>
</body>
</html>