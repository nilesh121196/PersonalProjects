<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Good Bye !</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </head>
  <body>
   <?php
	session_start();
	if(!isset($_SESSION['useremail'])){
		echo "<div style='padding:5px' class='alert-danger fade in'><center>Access denied !</center></div>";
    exit();
	}else{
	session_destroy();
	echo "<br><center><div class='container alert alert-warning' role='alert'>See You Soon !</div></center>";
	header("Refresh:1.5; url=index.php");
	}
?>

  </body>
</html>

