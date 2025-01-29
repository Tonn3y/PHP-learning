<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
     $x = "John";
     echo " Hello $x <br>";

    //  Checking the string length
    echo strlen("Hello world!");
    echo "<br>";
    // counting the number of words!
    echo str_word_count("Today was a very chilly day !");
    echo "<br>";
    // Searching for a word in a string
    echo strpos("Hi am a 20 year old juior full stack developer","developer");
    echo "<br>";
    echo strpos("Hi am a 20 year old juior full stack developer","wake");
    
    // Changing the respective cases of the strings
    echo strtoupper("yesterday <br>");
    echo strtolower("UdtONer <br>");

    // Replacing the strings with other strings
    $c = "Hello there!";
    echo str_replace("there","you up there <br>",$c);

    // Reversing a string
    $d = "We Lit Boyss!";
    echo strrev($d);
    ?>
</body>
</html>