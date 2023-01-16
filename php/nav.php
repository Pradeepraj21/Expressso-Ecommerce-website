<style type="text/css">
.navbtns ul li a{
  text-decoration: none;
  color : white;
  display: block;
  font-family: Georgia !important;
}

.navbtns ul li{
    float: left;
    width: 120px;
    height: 70px;
    color : #fff;
    background-color: #8ccbc5;
    line-height: 70px;
    text-align: center;
    font-size: 22px;
}

.drop{
    width: 120px;
    height: 50px;
    color : #fff;
    background-color:#8ccbc5;
    line-height: 50px;
    text-align: center;
    font-size: 22px;
    display: none;
    cursor: pointer;
}
.navi {
    background-color: #8ccbc5;
    position : relative;
    height: 70px;
    width: 100%;
    display: flex;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;

}
.review-slider {
    width: auto;
    height: 370px;
    margin: 20px 20px;
    border-radius: 5px;
    background-color: #a3ff7d;
    box-shadow: 0 2px 5px rgba(0,0,0,0.4), 0 1px 20px rgba(0,0,0,0.0) inset;
}
.reviewnext {
    position: absolute;
    text-align: center;
    cursor: pointer;
    padding: 50px 20px;
    top: 80px;
    right: 0px;
    color: white;
    background-color: #a3ff7d;
    border-radius: 8px 0px 0px 8px;
    box-shadow: 0 5px 8px rgba(0,0,0,0.6), 0 1px 20px rgba(0,0,0,0.0) inset;
}

.reviewprev {
    position: absolute;
    cursor: pointer;
    padding: 50px 20px;
    top: 80px;
    color: white;
    display: inline-flex;
    background-color: #a3ff7d;
    border-radius: 0px 8px 8px 0px;
    box-shadow: 0 5px 8px rgba(0,0,0,0.6), 0 1px 20px rgba(0,0,0,0.0) inset;
}
.reviewnext1 {
    position: absolute;
    text-align: center;
    cursor: pointer;
    padding: 50px 20px;
    top: 80px;
    right: 0px;
    color: white;
    background-color: #a3ff7d;
    border-radius: 8px 0px 0px 8px;
    box-shadow: 0 5px 8px rgba(0,0,0,0.6), 0 1px 20px rgba(0,0,0,0.0) inset;
}

.reviewprev1 {
    position: absolute;
    cursor: pointer;
    padding: 50px 20px;
    top: 80px;
    color: white;
    display: inline-flex;
    background-color: #a3ff7d;
    border-radius: 0px 8px 8px 0px;
    box-shadow: 0 5px 8px rgba(0,0,0,0.6), 0 1px 20px rgba(0,0,0,0.0) inset;
}


</style>
<script>
startTime = new Date();
</script>
<?php


$myip = get_client_ip();
@$uid = $_SESSION['user_id'];
if(loggedin()){
  $disp = 1;
} else {
  $disp = 0;
}
?>
<div class="nav-div">
  <nav class="navi">
    <a href="../analytics/login.php"><img src="../pics/logo_icon.png" alt="logo" id="web-logo"></a>
  <!--<h3 id="web-name">Expressso Shopping</h3>-->
    <div class="navbtns">
      <ul>
        <li><a href="Home Page.php" id="home">Home</a></li>
        <li><a href="Home Page.php" id="shop">Electronics</a>
          <ul id="dropdown">
            <li class="drop"><a onclick="topage('listitems.php?cat=2');">Mobiles</a></li>
            <li class="drop"><a onclick="topage('listitems.php?cat=3');">Laptops</a></li>
            <li class="drop"><a onclick="topage('listitems.php?cat=1');">Earphones</a></li>
          </ul>
        </li>
        <li><a href="Home Page.php" id="shop">Groceries</a>
          <ul id="dropdown">
            <li class="drop"><a onclick="topage('listitems.php?cat=4');">Grocery</a></li>
            <li class="drop"><a onclick="topage('listitems.php?cat=5');">Vegetables</a></li>
            <li class="drop"><a onclick="topage('listitems.php?cat=6');">Fruits</a></li>
            <li class="drop"><a onclick="topage('listitems.php?cat=7');">Beverages</a></li>
          </ul>
        </li>
        <li><a href="Home Page.php" id="shop">Fashion</a>
          <ul id="dropdown">
            <li class="drop"><a onclick="topage('listitems.php?cat=8');">Men</a></li>
            <li class="drop"><a onclick="topage('listitems.php?cat=9');">Women</a></li>
          </ul>
        </li>
       <!-- <li><a href="contacts.php" id="contact">Help</a></li>
      </ul>-->
    </div>

    <div class="search-box">
      <input class="search-txt" id="search-input" type="text" onkeyup="searchFunc()" placeholder="Type to search...." maxlength="30">
      <div class="display-box hide" id="db">

      </div>

      <a href="#" class="search-btn"><i class="fas fa-search fa-2x" id="s_btn"></i></a>
    </div>

    <div class="navicons">
      <div id="nav_c">
        <a href="#" class="nav-cartt"><i class="fas fa-user fa-2x" id="user"></i></a>

        <div id="login">
          <div class="login-arrow-up"></div>
          <div class="login-form">
            <?php
              if($disp == 0){
            ?>
            <p class="login-p signup" onclick="topage('signup.php');">New Customer ?&nbsp;&nbsp;<a href="signup.php">SignUp</a></p>
            <p class="login-p log" onclick="topage('Login.php');"><a href="Login.php">Login</a></p>
            <?php
          } else if($disp == 1){
            ?>
            <p class="login-p" onclick="topage('myorders.php');"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;Your Orders</p>
            <p class="login-p" onclick="topage('wishlist.php');"><i class="fa fa-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;Wishlist</p>
            <p class="login-p" onclick="topage('logout.php');"><i class="fas fa-power-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout</p>
          <?php
          }
            ?>

          </div>
        </div>

        <div id="logged">
          <div class="logged-arrow-up"></div>
          <div class="logged-form">
            <p class="logged-p"><b>My Profile</b></p>
            <p class="logged-p"><b>Instructions</b></p>
            <p class="logged-p"><b>Notifications</b></p>
            <p class="logged-p" onclick="topage('Home Page.php')"><b>Logout</b></p>
          </div>
        </div>

      </div>
       <a id="nav-cart" href="itemcart.php">
         <i class="fas fa-shopping-cart fa-2x" id="cart"></i>

           <?php
            if(loggedin()){
              if(countItems($conn,$uid)>0){
                echo '<div id="no-cart">'.countItems($conn,$uid).'</div>';
              }
            }
           ?>

       </a>
    </div>
  </nav>
</div>

<script>
function topage(pagename){

  document.location.href= pagename;

}
</script>

<script>
function searchFunc(){
  var search = document.getElementById("search-input").value;
  var element = document.getElementById("db");
  element.classList.remove("hide");
  element.classList.add("show");
  $.ajax({
    url:"search.php",
    method:"POST",
    data:{text:search},
    success:function(data){
      $('.display-box').html(data);
    }
  });
}

$(document).on('click',function(e){
    if(!$(e.target).closest('.display-box').length)
        $('.display-box').removeClass('show');
        $('.display-box').addClass('hide');
});

</script>
