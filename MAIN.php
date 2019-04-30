<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    </head>
 <body>
<?php
require('connect.php');
include ("head.php");
?>
<?php
  $sql = "select * from product";
  foreach ($conn->query($sql) as $row)
  {
	  $id = $row['id']; 
?>
<div class="1Product">
    <br> <br>
<a href="product1.php?id=<?php echo $id ?>" >
    <h2><?php echo $row['name']; ?></h2></a>

<a href="product1.php?id=<?php echo $id ?>">
    <img src="img/pic/<?php echo $row['image'];  ?>" alt="pic1" height=240px width=240px border="2px solid black " >
</a> 
<h3> <?php echo $row['price']."&nbsp;S.R.";  ?></h3>
</div>
<?php
  }
 ?>
<?php
include ("footer.php");
?> 
 </body>