<?php
include 'connection.php';
include 'functions.php';

if(isset($_POST['text'])){
  $text = $_POST['text'];

  $query1 = "SELECT * FROM mobiledataset WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query2 = "SELECT * FROM laptopdataset WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query3 = "SELECT * FROM head_earphone WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query4 = "SELECT * FROM grocerydataset WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query5 = "SELECT * FROM vegetabledataset WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query6 = "SELECT * FROM fruitdataset WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query7 = "SELECT * FROM beveragedataset WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query8 = "SELECT * FROM fashion WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";
  $query9 = "SELECT * FROM fashionwomen WHERE Product_name LIKE '%$text%' OR prod_des LIKE '%$text%' OR feature LIKE '%$text%'";

  $result1 = mysqli_query($conn,$query1);
  $result2 = mysqli_query($conn,$query2);
  $result3 = mysqli_query($conn,$query3);
  $result4 = mysqli_query($conn,$query4);
  $result5 = mysqli_query($conn,$query5);
  $result6 = mysqli_query($conn,$query6);
  $result7 = mysqli_query($conn,$query7);
  $result8 = mysqli_query($conn,$query8);
  $result9 = mysqli_query($conn,$query9);

  if($result1){
    while($q = mysqli_fetch_array($result1)){
      $pid = $q['id'];
      $cat = 2;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }

  if($result2){
    while($q = mysqli_fetch_array($result2)){
      $pid = $q['id'];
      $cat = 3;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }

  if($result3){
    while($q = mysqli_fetch_array($result3)){
      $pid = $q['id'];
      $cat = 1;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }
  
   if($result4){
    while($q = mysqli_fetch_array($result4)){
      $pid = $q['id'];
      $cat = 4;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }
  if($result5){
    while($q = mysqli_fetch_array($result5)){
      $pid = $q['id'];
      $cat = 5;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }
  if($result6){
    while($q = mysqli_fetch_array($result6)){
      $pid = $q['id'];
      $cat = 6;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }
  if($result7){
    while($q = mysqli_fetch_array($result7)){
      $pid = $q['id'];
      $cat = 7;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }
  if($result8){
    while($q = mysqli_fetch_array($result8)){
      $pid = $q['id'];
      $cat = 8;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }
  if($result9){
    while($q = mysqli_fetch_array($result9)){
      $pid = $q['id'];
      $cat = 9;
      $pname = $q['Product_name'];
      $pimg = $q['Product_img'];
      $pprice= $q['Product_price'];
      $prate= $q['rating'];
      $pdes= $q['prod_des'];
      $p_review= $q['total_review'];
      $pans= $q['ans_ask'];

      echo '
      <div class="row">
        <a href="discription.php?id='.$pid.'&cat='.$cat.'" target="_blank">
        <div class="column25"><img src="'.$pimg.'" alt="'.$pname.'" class="simg"></div>
        <div class="column75">'.$pname.'</div>
        </a>
      </div>
      ';
      //echo $q['Product_name'].'<br>';
    }
  }
}
?>
