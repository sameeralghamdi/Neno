<!DOCTYPE html>
<html>
    <head>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="product/product1.css">
    </head>
<body>
    <?php
include ("head.php");
$id= $_GET['id'];
require("connect.php");
 $sql="select * from product where id =$id";
 $stmt = $conn->prepare($sql);
 $stmt->execute();
 $result = $stmt-> fetch(PDO::FETCH_ASSOC);
 ?>

<div style=  margin-top: 55px;   margin-left: 110px ;> 
       
            <br>
            <h1 id=name1><?php echo $result['name'];?> </h1>
           
            
            <br>
                  <div/>
                        
                        
                  <div class=img >
            <img src="img/pic/<?php echo $result['image'] ?>" alt="pic1 "
                 style= " height: 400px ; width:400px;" >
                  </div>
                  <div id=Cart >
<h3 style= "text-align: justify ;" > 18.11SAR </h3>
<form action="db.php" method="post">
<label><b>Quantity: </b></label>
 <input type="hidden" name="id" value="<?php echo $id ;?>">
  <input type="hidden" name="price" value="<?php echo $result['price'] ;?>">
    <input type="number" placeholder="Enter Quantity" name="Quantity" required><br>
 <button id="btn1" type="submit" name="cart"> ADD To Cart </button>
  <button id="btn2" type="submit" name="chk"> Checkout </button> 

</div>
                  
       <div id=deti>
       <br><br><br>
       <button class="accordion">Description:</button>
<div class="panel">
<p> <?php echo $result['description']?></p>
</div>

<button class="accordion">Other Ingredients :</button>
<div class="panel">
 <p> <?php echo $result['Ingredient']?></p>
</div>

<button class="accordion">Visit Manufacturer's Website</button>
<div class="panel">
  <p>here you can find the <a href="<?php  echo $result['website']?>" >  Manufacturer's Website </a> . </p>
</div>
<br>
</div>
</form>
<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
};
}
</script>



<br> 
       <?php
include ("footer.php");
?>
    </body>
