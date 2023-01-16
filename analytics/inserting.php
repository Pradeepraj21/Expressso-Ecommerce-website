<?php
$page = "product";
include 'functions.php';
 ?>
 <!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="../pics/logo_icon.png">
<title>Products Analytics | Expresso Analytics</title>
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
      &nbsp;&nbsp;&nbsp;Expresso Analytics
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
    <h5><b><img src="../pics/logo_icon.png" alt="logo" width="20px" height="20px"> Product Analytics</b></h5>
  </header>


  <div class="w3-container">
 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "erp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$product_category = mysqli_real_escape_string($link, $_REQUEST['category']);
$product_name = mysqli_real_escape_string($link, $_REQUEST['product_name']);
$brand = mysqli_real_escape_string($link, $_REQUEST['brand']);
$img_url = mysqli_real_escape_string($link, $_REQUEST['img_url']);
$product_price = mysqli_real_escape_string($link, $_REQUEST['product_price']);
$product_rating = mysqli_real_escape_string($link, $_REQUEST['product_rating']);
$product_review = mysqli_real_escape_string($link, $_REQUEST['product_review']);
$ans_questions = mysqli_real_escape_string($link, $_REQUEST['ans_questions']);
$product_description = mysqli_real_escape_string($link, $_REQUEST['product_description']);
$product_features = mysqli_real_escape_string($link, $_REQUEST['product_features']);
 
// Attempt insert query execution
if($product_category == "mobile")
{
$sql = "INSERT INTO mobiledataset (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "laptop")
{
$sql = "INSERT INTO laptopdataset (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "earphone")
{
$sql = "INSERT INTO head_earphone (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "grocery")
{
$sql = "INSERT INTO grocerydataset (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "vegetables")
{
$sql = "INSERT INTO vegetabledataset (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "fruits")
{
$sql = "INSERT INTO fruitdataset (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "beverages")
{
$sql = "INSERT INTO beveragedataset (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "menfashion")
{
$sql = "INSERT INTO fashion (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}
if($product_category == "womenfashion")
{
$sql = "INSERT INTO fashionwomen (Product_name, by_info, Product_img, Product_price, rating, total_review, ans_ask, prod_des, feature) VALUES ('$product_name', '$brand', '$img_url', '$product_price', '$product_rating', '$product_review', '$ans_questions', '$product_description', '$product_features')";
}


if(mysqli_query($link, $sql)){
    echo '<script type="text/javascript"> alert("PRODUCT ADDED SUCCESSFULLY") </script>';
} else{
    echo '<script type="text/javascript"> alert("ERROR: Could not able to Add Product $sql. ") </script>' . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>
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
 