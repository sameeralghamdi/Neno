<!DOCTYPE html>
<html>
	<head>
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
             <style>
                 
                                              
                  </style>
        <?php
session_start();
require("connect.php");
include ("head.php");
?>
	</head>

	<body>
    <?php
  
     if(empty($_SESSION['u_id']))
     {
	 header("location:login.php");
     }
     $uid = $_SESSION['u_id'];
 $sql="select * from chkout where uid ='".$uid."'"; 
 foreach ($conn->query($sql) as $row1)
  { 
     $item_id =$row1['pid'];
     $quan =$row1['quan'];
	 $price=$row1['price'];
     $sql2="select * from product where id ='".$item_id."'"; 
   foreach($conn->query($sql2) as $row)
   {?>
<div class="1Product">
    <br> <br>
    <h2><?php echo $row['name']; ?></h2>
    <img src="img/pic/<?php echo $row['image'];  ?>" alt="pic1" height=240px width=240px border="2px solid black " >
<h3> <?php echo "Quantity : &nbsp;&nbsp;".$quan;  ?></h3>
<h3> <?php echo "Price : &nbsp;&nbsp;".$price;  ?></h3>
</div>
<?php
  }}
 ?>
	
		
		
<br> 
         <?php
include ("footer.php");
?>
    </body>

	</body>
</html>