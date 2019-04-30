<!DOCTYPE html>
<html>
	<head>
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
             <style>
                 
                                              
                  </style>
        <?php
include ("head.php");
?>
	</head>

	<body>
	<?php
include('session.php');
?>

<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>

		
		
<br> 
         <?php
include ("footer.php");
?>
    </body>

	
</html>