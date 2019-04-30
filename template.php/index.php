<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body>
    <?php
        require("nav.php");
    ?>

  </div>
     <div class="container" id="main-content">
        <h1>Heading</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolorem, aliquid autem enim error sed ducimus 
        laboriosam fugit beatae aliquam iure ab deleniti, nemo similique ipsum, maxime cum! Dolorem, non!</p>
    </div>

  <?php
    /*$PageTitle="Easter Holidays";

    function customPageHeader(){?>
    <?php }
    
    include_once('header.php');
    
   
    echo $h2 = "Welcome to my website.";
    echo "<br>";
    echo $h3 = "Learning PHP.";
    echo "<br>";
    echo "<br>";
    echo $holiday = "Wow";
    echo "<br>";
    echo strrev($holiday);
    echo "<br>";
    
    include_once('footer.php');*/
    ?>
<?php
require("footer.php");
?>
<?php
require("script.php");
?>

</body>
</html>