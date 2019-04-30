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
    padding: 16px;
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


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn ,.loginbtn {
    float: left;
    width: 33%;
}
.loginbtn{

    padding: 14px 20px;
    background-color: green;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
body{
    background-image: url(img/paper-10.jpg);
}
</style>
    </head>
<body>
    <?php
include ("head.php");
?>
    
<h2>Signup</h2>

<form action="db.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
     <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label><b>Country</b></label>
    <input type="text" placeholder="Enter your Country" name="country" required>
    
    <label><b>City</b></label>
    <input type="text" placeholder="Enter your city" name="city" required>
    
    <label><b>Phone</b></label>
    <input type="text" placeholder="Enter your phone" name="phone" required>
    
    <label><b>Street Number</b></label>
    <input type="text" placeholder="Enter your Street Number " name="StreetNumber" required>
    
    <label><b>Street Name</b></label>
    <input type="text" placeholder="Enter your Street Name" name="StreetName" required>
    
    <label><b>ZIP Code </b></label>
    <input type="text" placeholder="Enter your ZIP Code" name="ZIP" required>
    
   
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="term.php"target="_blank">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" onClick="location.href='MAIN.php'" >Cancel</button>
      <button type="submit" class="signupbtn" name="sign">Sign Up</button>
      <a href=Login.php ><button type="button" class="loginbtn" >Login</button></a>
    </div>
  </div>
</form>

<?php
include ("footer.php");
?>
        
    </body>
</html>