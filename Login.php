<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="file:///C:/Users/SAM/Desktop/neno/img/logo.png" type="image/x-icon" />
    <style>
  
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  
  
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 10px;
        background-image: url(/img/paper-10.jpg);

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
#ti{
    text-align: center ;
}
.singupref{
     float: right;
    
}
body, html {
    height: 100%;
}

.bg {
    /* The image used */
    background-image: url("file:///C:/Users/SAM/Desktop/neno/img/f12.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover ;
}

</style>
    </head>
<body>
 <?php
include ("head.php");
?>

<h2 id=ti> Login </h2>

<form action="db.php" method="post">
  <div class="container">
    <label><b>Email</b></label>
    <input id="name" name="email" placeholder="saad@gmail.com" type="text" required>

    <label><b>Password</b></label>
   <input id="password" name="password" placeholder="**********" type="password" required>
        
    <button type="submit" name="login" value=" Login ">Login</button>
   
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-image: url(/img/paper-10.jpg);">
    <button type="button" class="cancelbtn" onClick="location.href='MAIN.php'">Cancel</button> 
    <span class="singupref"> <a href="singup.php">SignUp</a></span>
   
  </div>
</form>
<br>
<?php
include ("footer.php");
?>

</body>
</html>

