<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    //echo is used for ouputting text or values
    echo "Hello <br>";
    //key words are not case senstive but variable names are case senstive
    $greetings = "Hello from PHP variable";
    $Greetings = "I am with uppercase";
    // . is used for concatenation (like the + in javascript)
    echo $greetings. "<br>";
    //print is also used for ouput
    print $greetings. "<br>";

    /*difference between single quotes and double quotes...
    single quote produces the text as it is and does not produce the values
    but double quotes produces the value of the variable or escape sequence
    */

    echo '$greetings...using \t single quotes <br>';
    echo "$greetings...using \t double quotes <br>";
    echo 30+25;
    echo "<br>";

    var_dump("This is from var_dump "); //produces the values and data types
    var_dump($greetings);
    echo gettype($greetings)."<br>";
    $n=10;
    var_dump($n);
  
    settype($n, "string"); //to change the data type use settype 
    echo "<br> Now the data type of n is " . gettype($n). "<br>";
    echo is_float($n);
    //condition statement is the same as JS
        if ($n=="10") {
            echo "yes, it is equivalent to 10";
        } else {
            echo "No it is not";
        }
    //Arrays are used with different wording from JS
        //var names = ["David", "Jones"]; - this is the JS Syntax
        $names=array ("David", "Jones");
    //loops are similar to JS
        for ($x = 0; $x <= 10; $x++){
            echo "The number is: $x <br>";
        }
        foreach($names as $name){
            echo "<br>". $name."<br>";
        }

    ?>
</body>
</html>