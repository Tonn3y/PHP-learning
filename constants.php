<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define("LOCATION","JKUAT is in JUJA <br>");
    echo LOCATION;
    // Const cannot be called inside a block like function or if statements
    // define is gloal
    define("CARS",["Ferrari-spyder","Porsche","Mclaren","Aston Martin <br>"]);
    echo CARS[3];

    function myTest() {
        echo LOCATION ;
    }

    myTest();
    ?>
</body>
</html>