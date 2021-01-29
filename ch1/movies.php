<h1><?php
echo "Information about ".$_GET['movieName'];
?></h1>
<h3><?php
echo "Based on the input, here is the information so far:";
echo '<br>';
echo $_GET['movieStar']." starred in the movie ".$_GET['movieName']." which was released in year 2019";
?></h3>

