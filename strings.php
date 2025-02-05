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

    // Removing the white space
    $e = "<br>   We should be there!  ";
    echo trim($e);

    // Converting a string into an array
    $g = "Hope you are well";
    $h = explode(" ",$g);
    print_r($h);

    // Concatenate strings
    $i = "Hi";
    $j = "Elsie <br>";
    $k = "$i $j";
    // or $k = $i.$j;
    echo $k;

    // Slicing strings
    $l = "Tonight's game will be between the mavericks and dallas! <br>";
    $m = substr($l,10,9);
    echo $m;

    // Escape characters is for inserting illegal charcters in a string e.g double quotes or a variable it is surrounded by a backlash \
    $n = "Tomorrow is a big day cause the $m be played at night.<br>";
    echo $n;
    $o = "Yes tomorrow will be visiting \"grandma\" and grandpa";
    echo $o;
    ?>
</body>
</html>