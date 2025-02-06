<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $color = "Yellow";
    switch($color) {
        case "Blue":
            echo "My favorite color is Blue <br>";
            break;
        case "Red":
            echo "My favorite color is Red <br>";
            break;
        case "Yellow":
            echo "Your favorite color is Yellow <br>";
            break;
        case "Orange":
            echo "Your favorite color is Orange <br>";
            break;        
    }

    $d = 4;
    switch($d) {
        case 0:
            echo "Today is a Beautiful Sunday <br>";
            break;
        case 6:
            echo "Saturday is soo good!!! <br>";
            break;
        default:
            echo "Looking forward for the weekend! <br>";
            break;        
    }
    ?>
</body>
</html>