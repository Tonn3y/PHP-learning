<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // For checking he infinite number var_dump gives 
    $a = 123*exp(432887);
    var_dump($a);

    // for checking whether calculation is not a number
    $b = asin(8);
    var_dump($b);

    // isnumeric fo checking whether a string is anumber or not.
    $c = 256;
    var_dump(is_numeric($c));

    $d = "We ride along together";
    var_dump(is_numeric($d));

    echo pi();
    ?>
</body>
</html>