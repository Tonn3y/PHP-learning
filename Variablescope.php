<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables scope</title>
</head>
<body>
    <?php
    // Variable with a global scope
    $player47 = "Phil Foden";

    function player(){
        global $player47;
        echo "The in form player currently at man city is <br>", $player47;
        // The variable player47 is global thus can't be accessed within a function unless the term global is used otherwise an error would be generated.
    }
    player();

    echo "$player47  is currently the most in form plaeyer at mancity.";
    
    //Variables with a local scope 

    function car() {
        $a = "BMW";
        echo "one of the best sports car is ", $a ,"<br>";
    }
    car();

    // The variable $a can only be accessed inside the function not outside
    // echo "One of the best sports car is ", $a, "<br>";

    // Static variables
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
      }
      
      myTest();
      myTest();
      myTest();
    ?>
</body>
</html>