<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HTML Document Title</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>
  <?php 
  echo "Hello ".$_GET['companyName'];
  ?>!
  </h1>
    <p>A paragraph</p>
    <form method="post">
        <input type="text" name="domain">
        <input class="btn btn-primary" type="submit" value="Send">
    </form>
</body>

</html>
<?php
//$name=$_GET['companyName'];
//echo "Hello ".$name;
?>