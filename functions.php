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
<?php declare(strict_types=1);
function car($a) {
    echo "The team that won the constructors championship last season is $a" . "<br>";
}
car("Mclaren");

function sum($b,$c) {
    $d = $b + $c;
    return $d;
}

function multiply($e,$f) {
    $g = $e * $f;
    return $g;
}

echo "15 + 21 =".sum(15,21). "<br>";
echo "32 x 21 = ".multiply(32,21). "<br>";

function multipliedby10($value) {
    return $value*=10;
}

$num = 65;
echo multipliedby10($num)."<br>";
var_dump(multipliedby10($num));

// functions that allows unknown number of arguments

function myNumbers(...$m) {
    $n = 0;
    $len = count($m);
    for ($i=0;$i<$len;$i++) {
        $n += $m[$i];
    }
    return $n;
}

$v = myNumbers(3,6,4,7);
echo $v;

function myFamily($lastname,...$firstname){
    $txt = "";
    $len = count($firstname);
    for ($i = 0;$i<$len;$i++) {
        $txt = $txt."Hi $firstname[$i] $lastname.<br>";
    }
    return $txt;
}
$s = myFamily("Kemboi","Evans","Mellen","Tony","Teddy");
echo $s;

function addNumbers(float$q,float$r) : float {
    return $q + $r;
}
echo addNumbers(2.3,3.1);
?>