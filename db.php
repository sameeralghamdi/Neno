<?php
session_start();
require("connect.php");
if(isset($_POST['login']))
	{
	   $email = $_POST['email'];
       $pass = $_POST['password'];
       $sql = "SELECT * FROM user WHERE uemail='".$email."' AND upass='".$pass."' ";
       $stmt =$conn->prepare($sql);
       $stmt->execute();
       $row = $stmt-> fetch(PDO::FETCH_ASSOC);
        if($count = $stmt->rowCount() >= 1) 
	{
		$_SESSION['u_id'] = $row['uid'];
        header("location:MAIN.php");
	} 
	else
	{
		 echo "<script type='text/javascript'>alert('Invalid Login Information!!');
			  window.location.href ='loginPage.php';</script>";
	}
	}
	else if(isset($_POST['sign']))
	{
		$email = $_POST['email'];
        $pass = $_POST['psw'];
	    $country =$_POST['country'];
		$phone =$_POST['phone'];
		$city =$_POST['city'];
	    $strNo =$_POST['StreetNumber'];
	    $strName =$_POST['StreetName'];
		$zip =$_POST['ZIP'];
       $sql = "insert into user(uemail,upass,ucountry,ucity,uphone,ustreetno,ustreetname,uzip) values('".$email."','".$pass."','".$country."','".$city."','".$phone."','".$strNo."','".$strName."','".$zip."')";
	   if($conn->exec($sql)) 
	   {
          header("location: login.php");
	   }
	}
    else if (isset($_POST['cart']))
    { 		
		if(empty($_SESSION['u_id']))
        {
		  header("location:login.php");
	    }
		else
		{
		  $u_id=$_SESSION['u_id'];
		  $quan=$_POST['Quantity'];
		  $item_id=$_POST['id'];
		  $sql1 = "insert into cart(uid,pid,quan) values(".$u_id.",".$item_id.",".$quan.")";
         if($conn->exec($sql1))
         {
			 echo "<script type='text/javascript'>alert('Item Added To  shopping Cart ');
			  window.location.href = 'product1.php?id=$item_id';</script>";
         }
		}
 
 }
 else  if (isset($_POST['chk']))
 {
	  if(empty($_SESSION['u_id']))
        {
		  header("location:login.php");
	    }
	 else
	 {
		$u_id=$_SESSION['u_id'];
		  $quan=$_POST['Quantity'];
		  $item_id=$_POST['id'];
		  $price =$_POST['price'];
		  $sql1 = "insert into chkout(uid,pid,quan,price) values(".$u_id.",".$item_id.",".$quan.",".$price.")";
         if($conn->exec($sql1))
         {
			 echo "<script type='text/javascript'>alert('Your Order is Placed Successfully ');
			  window.location.href = 'MAIN.php';</script>";
         }
      }
 }
?>