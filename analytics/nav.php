<?php

$pd='';$pp='';$pu='';$ppr='';$pe='';$pg='';
if($page == 'dashboard'){
  $pd = "w3-blue";
} else if($page == 'pages'){
  $pp = "w3-blue";
} else if($page == 'users'){
  $pu = "w3-blue";
} else if($page == 'orders'){
  $ppr = "w3-blue";
} else if($page == 'product'){
  $pe = "w3-blue";
} else if($page == 'logout'){
  $pg = "w3-blue";
}
 ?>
<div class="w3-bar-block">
  <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
  <a href="dashboard.php" class="w3-bar-item w3-button w3-padding <?php echo $pd; ?>"><i class="fa fa-users fa-fw"></i>  Overview</a>
  <a href="pages.php" class="w3-bar-item w3-button w3-padding <?php echo $pp; ?>"><i class="fa fa-eye fa-fw"></i>  Pages</a>
  <a href="users.php" class="w3-bar-item w3-button w3-padding <?php echo $pu; ?>"><i class="fa fa-users fa-fw"></i>  User Behaviour</a>
  <a href="orders.php" class="w3-bar-item w3-button w3-padding <?php echo $ppr; ?>"><i class="fa fa-list fa-fw"></i>  Orders</a>
  <a href="products.php" class="w3-bar-item w3-button w3-padding <?php echo $pe; ?>"><i class="fa fa-product-hunt"></i>  Products</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-padding <?php echo $ppa; ?>"><i class="fa fa-sign-out fa-fw "></i>  Logout</a>

</div>
