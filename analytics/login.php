<?php
session_start();
include('database.inc.php');
include('function.inc.php');
$msg="";
if(isset($_POST['submit'])){
	$username=get_safe_value($_POST['username']);
	$password=get_safe_value($_POST['password']);
	
	$sql="select * from admin where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['IS_LOGIN']='yes';
		$_SESSION['ADMIN_USER']=$row['name'];
		redirect('dashboard.php');
	}else{
	//$msg="Please enter valid login details";
    echo '<script type="text/javascript"> alert("INVALID LOGIN: Please enter valid Login Credentials") </script>';
	}
}
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="icon" type="image/png" href="../pics/logo_icon.png">
    <title>Expressso | ADMIN </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/css.css">

</head>
<style type="text/css">
    #login-body,#sign-up-body{
   position: absolute;
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
   z-index: -1;
   background-image: url("../pics/background-2]].jpg");
   background-color: #dff273;
   object-position: 
   object-fit: contain;
   background-repeat: no-repeat;
}

.back-icon{
   background:url("images/icons8-back-100\ 1.png");
   position: absolute;
   object-fit: cover;
   width: 55px;
   height: 55px;
   top: 110px;
   left: 30px; 
   background-size: contain;   
}
.main-container{
   position: absolute;
   top: 100px;
   left: 550px;
   width:430px;
   height: 525px;
   border-style: groove;
   border-radius: 10px;
   border-color: rgb(235, 235, 235);
   filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
   background:#6c757d;
   background-image: url("../pics/background-2.jpg");

}
</style>

<body onbeforeunload="pageAnalytics()">

    <div id="login-body"></div>

     <div class="main-container">

              <div class="brand-logo text-center">
                <center><div class="img"><a href="../php/Home Page.php"><img src="../pics/logo_icon.png" align="logo"></a></div></center>
              </div>
               <div class="title">
              <marquee> <label for="login">Sign in to continue</label></marquee>
            </div>
              <!--<form class="pt-3" method="post"> -->
                <form action="" method="post"> 
                <div class="form-group">
                  <input type="textbox" class="form-control"  id="exampleInputEmail1" placeholder="USERNAME" name="username" required>
                </div></br>
        
                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD"  name="password" required>
                </div>
                <!-- <div class="log-button"> -->
                  <!--<div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN" name="submit"/><input type="submit" class="log-button" value="SIGN IN" name="submit"/>-->

                  <input type="submit" class="log-button" value="SIGN IN" name="submit"/>
                </div>
                
              </form>
			  <div class="login_msg"><?php echo $msg?></div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- plugins:js -->
  <script src="assets/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>