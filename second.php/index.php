<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Easter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <script src="main.js"></script> -->

</head>
<body>
    <!-- <h1>Easter Holidays</h1>
    <a href="index.php">Main page</a><br>
    <a href=?about>About</a><br>
    <a href=?links>Links</a><br>
    <br><br>  -->
    

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
<div><img src="/images/logo.jpg" alt="logo"></div>
	<div class="container">
         <div class="navbar-header">
         <br>
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> -->
        <!-- <span class="sr-only">Toggle navigation</span> -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Relax</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#">Graphic Design</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</nav>
  </div>
     <div class="container" id="main-content">
        <h1>Easter Holidays</h1>
        <!-- <h2>Welcome to my website.</h2>
        <h3>Learning PHP.</h3> -->
    </div>

    <?php
    $PageTitle="Easter Holidays";

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
    //echo strcmp("Lighthouse Petone!", $theatre);
    
    include_once('footer.php');

   
    
    
    
    // function compare() {
    //     echo $theatre;
    // }
    // writeMsg(); //calling the function
    ?>

<footer>
    <ul>
        <li><a href="">Link 1</a></li>
        <li><a href="">Link 2</a></li>
        <li><a href="">Link 3</a></li>
        <li><a href="">Link 4</a></li>
    </ul>
</footer>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>