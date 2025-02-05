<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 3.55;
    $c = "There was a collision on the highway";
    $d = true;
    $e = null;
    $f = "There was a marathon on the expressway today morning";

    $a = (int) $a;
    $b = (bool) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (array) $f;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    ?>
</body>
</html>