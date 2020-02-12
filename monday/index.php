<?php

	$isValidated=false;
	
	
	if(isset($_GET['name']) && isset($_GET['age'])
			&& isset($_GET['pwd']) && isset($_GET['color'])
	){
		$isValidated=true;
		
		$name = $_GET['name'];
		$age = $_GET['age'];
		$pass = $_GET['pwd'];
		$color = $_GET['color'];
		
		
		if(strlen($name) == 0){
			$isValidated=false;
		}
		
		
	}
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $name?>'s Web Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <style>
  
	body{
		background-color:<?php echo $color ?>;
		
	}
  </style>
</head>
<body>

<?php if($isValidated == true) { ?>

<div class="jumbotron text-center">
  <h1><?php echo $name ?></h1>
  <p>Your age is <?php echo $age ?> and your password is <?php echo $pass ?></p> 
  
  
</div>

<?php  } else {?>


<div class="jumbotron text-center">
  <h1>Please pass the data</h1>
  
  
</div>

<?php } ?>
  


</body>
</html>
