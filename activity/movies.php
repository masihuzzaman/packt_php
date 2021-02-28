<?php
//Capture query string data in the file to store the details of the movies, such as the name, the actors, and the release years
$name = $_GET['movieName'];
$star = $_GET['movieStar'];
$year = $_GET['movieYear'];
?>

<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initialscale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title><?php echo $name; ?></title>
      </head>
      <body>
           <div>
	       <h1>Information about <?php echo $name; ?></h1>
	        <p>
	            Based on the input, here is the information so far:
		    <br>
		    <?php echo $star . ' starred in the movie ' . $name .
				' which was released in year ' . $year; ?>
		</p>
	   </div>
	</body>
</html>

