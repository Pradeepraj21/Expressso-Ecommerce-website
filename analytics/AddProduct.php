<?php
$page = "product";
include 'functions.php';
 ?>
 <!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="../pics/logo_icon.png">
<title>Products Analytics | Expressso Analytics</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Verdana", sans-serif}
    #top-navi{
        width : 100%;
        background-color: #00095B;
    }

    #page-logo{
      margin-top: 2px;
        max-width: 40px;
        max-height: 40px;
        border-radius : 50px;
        box-shadow: 0 1px 8px rgba(255,255,255,0.6), 0 0 20px rgba(255,255,255,0.1) inset;

    
            
    </style>
<body class="w3-light-grey">
  <style type="text/css">
    .add_link{
     
      color: #027bff;
      font-size:20px;
      font-family: "Verdana", sans-serif;
    }
    

  </style>

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-left" id="top-navi">
      <img src="../pics/logo_icon.png" alt="logo" id="page-logo">
      &nbsp;&nbsp;&nbsp;Expressso Analytics
  </span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <?php include 'nav.php'; ?>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h3 align=center><b><img src="../pics/logo_icon.png" alt="logo" width="20px" height="20px"> Add Product</b></h3>
  </header>


  <div class="w3-container">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Products</title>
</head>
<body>
	<style type="text/css">
		.btn-primary, .wizard > .actions a {
		  color: #fff;
		  background-color: #5e2572;
		  border-color: #5e2572;
		  height: 35px
		}
	</style>
<form action="inserting.php" method="post">
<table align="center">
	<tr>
	<td>
	<label>Product Category:</label>
	</td>
	<td>
	<!--<input type="radio" id="mobile" name="category" value="mobile">
	<label>Mobile</label>
	<input type="radio" id="grocery" name="category" value="grocery">
	<label>Grocery</label>
	<input type="radio" id="laptop" name="category" value="laptop">
	<label>Laptop</label>-->
	<div class="row">
    <select class="" name="category" required>
	<option value="" id="">Select Category</option>
	<option value="mobile" id="mobile">Mobiles</option>
	<option value="laptop" id="laptop">Laptops</option>
	<option value="earphone" id="earphone">Earphones</option>
	<option value="grocery" id="grocery">Grocery</option>
	<option value="vegetables" id="vegetables">Vegetables</option>
	<option value="fruits" id="fruits">Fruits</option>
	<option value="beverages" id="beverages">Beverages</option>
	<option value="menfashion" id="menfashion">Men's Fashion</option>
	<option value="womenfashion" id="womenfashion">Women's Fashion</option>
	</td>
	</tr>
	<tr>
    	<td>
        <label>Product Name:</label>
	</td>
	<td>
        <input type="text" name="product_name" id="productname">
    	</td>
	</tr>
	<tr>
    	<td>
        <label>Brand:</label>
	</td>
	<td>
        <input type="text" name="brand" id="brand">
    	</td>
	</tr>
	<tr>
    	<td>
        <label>Product Img url:</label>
	</td>
	<td>
        <input type="text" name="img_url" id="imageurl">
    	</td>
	</tr>
	<tr>
    	<td>
        <label>Product Price:</label>
	</td>
	<td>
        <input type="text" name="product_price" id="productprice">
    	</td>
	</tr>
	<tr>
     	<td>
        <label>Product Rating:</label>
	</td>
	<td>
        <input type="text" name="product_rating" id="productrating">
    	</td>
	</tr>
	<tr>
     	<td>
        <label>Product Review:</label>
	</td>
	<td>
        <input type="text" name="product_review" id="productreview">
    	</td>
	</tr>
	<tr>
     	<td>
        <label>No. of Answered Questions:</label>
	</td>
	<td>
        <input type="text" name="ans_questions" id="ansquestions">
    	</td>
	</tr>
	<tr>
    	<td>
        <label>Product Description:</label>
	</td>
	<td>
        <input type="text" name="product_description" id="productdescription">
    	</td>
	</tr>
	<tr>
    	<td>
        <label>Product Features:</label>
	</td>
	<td>
        <input type="text" name="product_features" id="product_features">
   	</td>
	</tr>
	<tr>
	<td>
	</td>
	<td></br>
    <input class="btn-primary" type="submit" value="SUBMIT">
	</td>
	</tr>
	</table>
</form>
</body>
</html>
</div>
  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
