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
?>