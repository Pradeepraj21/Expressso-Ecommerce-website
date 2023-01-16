<?php
$page = 'Home';
$title = $page;
	include 'connection.php';
	include 'functions.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../pics/logo_icon.png">
	<title>All in One Shopping. We bring services to your hands.</title>
	<?php include 'includes.php'; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	/* width */
	::-webkit-scrollbar {
	  width: 10px;
	}

	/* Track */
	::-webkit-scrollbar-track {
	  background: #ffffff;
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
	  background: #00095B;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
	  background: #00095B;
	}
	</style>

	<script type="text/javascript">
		function toproduct(pagename){
			window.open(pagename, "_blank");
		}
	</script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<style type="text/css">
		.login-p,.logged-p{
			padding-top: 15px;
			width : auto;
			height : 40px;
			background-color : white;
			cursor: pointer;
			margin-bottom: 0px;
			text-align: left;
			padding-left: 20px;
			border-radius: 2px;
		}

		.display-box {
  			top:58px;
		}

		.foot-base1 {

	        height: 70px;
	        background-color: #1F1E20;
	        font-size: 15px;
	        font-weight: bold;
	        color: white;
	    }

	    .foot-base1 hr{
	        height: 5px;
	        margin-left: 50px;
	        margin-right: 50px;
	    }

	    .foot-base1 p{
	        margin-left: 50px;
	    }

	    #email-id{
	        text-decoration: none;
	        color : orange;
	        font-family: Arial;
	        cursor: pointer;
	        font-weight: normal;
	        font-size: 15px;
	    }

	    .review, .review a,.ephone, .ephone a,.best, .best a,.lap, .lap a{
	    	outline: none;
	    }

	    .column25 {
			float:left;
			width:25%;
			padding:10px;
			padding-left: 40px;
		}

		.column75 {
			float:left;
			width:55%;
		  padding-top: 10px;
		  margin-left: -30px;
		}

		.column25 img {
		  max-width: 50px;
		  max-height: 50px;
		  border-radius: 0px;
		  margin: auto;
		}

		#home{
			color : #00095b;
		}
		.navbtns ul li a:hover{
	    text-decoration: none;
	    color: #00095b;
	    transform: translateY(-5px);
	    font-size: 25px;
	    transition: 0.3s ease;
	}
		.navicons a i{
	    color: #ffffff;
	    padding: 22px 0px;
	}
		.navicons a:hover i {
        color:#00095b;
    }

		#s_btn {
	    margin-left: 20px;
	    margin-top: 20px;
	    color: #ffffff;
	}

		#s_btn:hover {
	    color: #00095b;
	    transition: 0.4s ease;
	}

	</style>

</head>

<body onbeforeunload="pageAnalytics()">

	<?php include 'nav.php'; ?>

	<div id="img-slider">
		<div id="carousel1" class="my-carousel carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#carousel1" data-slide-to="0" class="active"></li>
				<li data-target="#carousel1" data-slide-to="1"></li>
				<li data-target="#carousel1" data-slide-to="2"></li>
				<li data-target="#carousel1" data-slide-to="3"></li>
				<li data-target="#carousel1" data-slide-to="4"></li>
				<li data-target="#carousel1" data-slide-to="5"></li>
				<li data-target="#carousel1" data-slide-to="6"></li>
			</ol>

			<div class="carousel-inner" role="listbox">

				<div class="item active">
					<img src="../pics/mobile-ad.jpg" alt="Four slide image" class="center-block" onclick="toproduct('discription.php?id=32&cat=2');">
					<div class="carousel-caption"><h3></h3></div>
				</div>

				<div class="item">
					<img src="../pics/grocery-ad.jpg" alt="Second slide image" class="center-block"onclick="toproduct('discription.php?id=29&cat=4');">
					<div class="carousel-caption"><h3>Premium Quality | Great Prices</h3></div>
				</div>

				<div class="item">
					<img src="../pics/laptop-ad.jpg" alt="Third slide image" class="center-block" onclick="toproduct('discription.php?id=11&cat=3');">
					<div class="carousel-caption"><h3>intel Special Offers | Starting @ 53490/-</h3></div>
				</div>

				<div class="item">
					<img src="../pics/earphone-ad.jpg" alt="First slide image" class="center-block" onclick="toproduct('discription.php?id=31&cat=1');">
					<div class="carousel-caption"><h3>Earphones Starting @ 149/- </h3></div>
				</div>

				<div class="item">
					<img src="../pics/men-ad.jpg" alt="Second slide image" class="center-block" onclick="toproduct('discription.php?id=18&cat=8');">
					<div class="carousel-caption"><h3>Branded Men's Collection</h3></div>
				</div>

				<div class="item">
					<img src="../pics/women-ad.jpg" alt="Third slide image" class="center-block" onclick="toproduct('discription.php?id=7&cat=9');">
					<div class="carousel-caption"><h3>Unlimited Cool & Trendy Stuffs</h3></div>
				</div>

				<div class="item">
					<img src="../pics/fruit-ad.jpg" alt="Third slide image" class="center-block" onclick="toproduct('discription.php?id=6&cat=6');">
					<div class="carousel-caption"><h3></h3></div>
				</div>
			</div>

			<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<?php
	$myip = get_client_ip();
	$select2 = mysqli_query($conn,"SELECT * FROM recommend WHERE ip='$myip'");
	if(mysqli_num_rows($select2)){
	?>
	<div class="review-slider">
		<div class="review-title">
			<div id="title-text">
				<h3>Recommendation For You </h3>
			</div>
		</div>

		<div class="review-con-holder">
			<div class="caro review-content">
			<?php
			while($s2 = mysqli_fetch_array($select2)){
				$Bname = $s2['name'];

				$select3 = mysqli_query($conn,"SELECT * FROM head_earphone WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=1" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="ephone-boat-e-img" style="margin-top:22px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}

				$select3 = mysqli_query($conn,"SELECT * FROM mobiledataset WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=2" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="best-dell-1-img">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}

				$select3 = mysqli_query($conn,"SELECT * FROM laptopdataset WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=3" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img" style="margin-top:45px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}

				$select3 = mysqli_query($conn,"SELECT * FROM fashion WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=8" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img" style="margin-top:45px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}

				$select3 = mysqli_query($conn,"SELECT * FROM fashionwomen WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=9" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img" style="margin-top:45px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}
				
				$select3 = mysqli_query($conn,"SELECT * FROM grocerydataset WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=4" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img" style="margin-top:45px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}

				$select3 = mysqli_query($conn,"SELECT * FROM vegetabledataset WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=5" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img" style="margin-top:45px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}

				$select3 = mysqli_query($conn,"SELECT * FROM fruitdataset WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=6" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img" style="margin-top:45px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}

				$select3 = mysqli_query($conn,"SELECT * FROM beveragedataset WHERE by_info='$Bname' LIMIT 2");
				while($s3 = mysqli_fetch_array($select3)){
					$pid = $s3['id'];
					$pname = $s3['Product_name'];
					$pimg = $s3['Product_img'];
					$pprice= $s3['Product_price'];
					echo '
					<div class="review">
					<a href="discription.php?id='.$pid.'&cat=7" target="_blank">
					<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img" style="margin-top:45px;">
					<p id="ephone-pname">'.$pname.'</p>
					<p>Now at &#8377 '.$pprice.'</p>
					</a>
					</div>
					';
				}
			}
			 ?>

			</div>

			<i class="fas fa-chevron-left fa-2x reviewprev"></i>
			<i class="fas fa-chevron-right fa-2x reviewnext"></i>
		</div>
	</div>
<?php
}
 ?>

	<div class="ephone-slider">
		<div class="ephone-title">
			<div id="title-text">
				<marquee><h3>Top Quality Headphones and Earphones</h3></marquee>
				<p>Top 10 products</p>
			</div>
		</div>

		<div class="ephone-con-holder">
			<div class="caro ephone-content">

				<?php
					$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM head_earphone LIMIT 10");
					while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="ephone">
							<a href="discription.php?id='.$pid.'&cat=1" target="_blank">
							<img src = "'.$pimg.'" alt="'.$pname.'" id="ephone-boat-e-img">
							<p id="ephone-pname">'.$pname.'</p>
							<p>Now at &#8377 '.$pprice.'</p>
							</a>
						</div>
						';
					}
				?>
			</div>

			<!--<i class="fas fa-chevron-left fa-2x ephoneprev"></i>
			<i class="fas fa-chevron-right fa-2x ephonenext"></i>-->
		</div>
	</div>


	<div class="best-slider">
		<div class="best-title">
			<marquee><h3>Best Battery Phones</h3></marquee>
			<p id="best-all-btn"></p>
		</div>

		<div class="best-con-holder">

			<div class="caro best-content">
				<?php
					$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM mobiledataset LIMIT 10");
					while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="best">
						<a href="discription.php?id='.$pid.'&cat=2" target="_blank">
						<img src = "'.$pimg.'" alt="'.$pname.'" id="best-dell-1-img">
						<p id="best-pname">'.$pname.'</p>
						<p>Now at &#8377 '.$pprice.'</p>
						</a>
						</div>
						';
					}
				?>

			</div>

			<!--<i class="fas fa-chevron-left fa-2x bestprev"></i>
			<i class="fas fa-chevron-right fa-2x bestnext"></i>-->

		</div>
	</div>

	<div class="lap-slider">
		<div class="lap-title">
			<marquee><h3>Best Priced Laptops</h3></marquee>
		</div>

		<div class="lap-con-holder">

			<div class="caro lap-content">
				<?php
				$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM laptopdataset LIMIT 10");
				while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="lap">
						<a href="discription.php?id='.$pid.'&cat=3" target="_blank">
						<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img">
						<p id="lap-pname">'.$pname.'</p>
						<p>Now at &#8377 '.$pprice.'</p>
						</a>
						</div>
						';
					}
				?>
			</div>

			<!--<i class="fas fa-chevron-left fa-2x lapprev"></i>
			<i class="fas fa-chevron-right fa-2x lapnext"></i>-->
		</div>
	</div>
	
	<div class="ephone-slider">
		<div class="ephone-title">
			<div id="title-text">
				<marquee><h3>Best Men's LifeStyle Here</h3></marquee>
				<p id="best-all-btn"></p>
			</div>
		</div>

		<div class="ephone-con-holder">
			<div class="caro ephone-content">

				<?php
					$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM fashion LIMIT 10");
					while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="ephone">
							<a href="discription.php?id='.$pid.'&cat=8" target="_blank">
							<img src = "'.$pimg.'" alt="'.$pname.'" id="ephone-boat-e-img">
							<p id="ephone-pname">'.$pname.'</p>
							<p>Now at &#8377 '.$pprice.'</p>
							</a>
						</div>
						';
					}
				?>
			</div>

			<!--<i class="fas fa-chevron-left fa-2x ephoneprev"></i>
			<i class="fas fa-chevron-right fa-2x ephonenext"></i>-->
		</div>
	</div>



	<div class="best-slider">
		<div class="best-title">
			<marquee><h3>Best Women's LifeStyle Here</h3></marquee>
			<p id="best-all-btn"></p>
		</div>

		<div class="best-con-holder">

			<div class="caro best-content">
				<?php
					$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM fashionwomen LIMIT 10");
					while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="best">
						<a href="discription.php?id='.$pid.'&cat=9" target="_blank">
						<img src = "'.$pimg.'" alt="'.$pname.'" id="best-dell-1-img">
						<p id="best-pname">'.$pname.'</p>
						<p>Now at &#8377 '.$pprice.'</p>
						</a>
						</div>
						';
					}
				?>

			</div>

			<!--<i class="fas fa-chevron-left fa-2x bestprev"></i>
			<i class="fas fa-chevron-right fa-2x bestnext"></i>-->

		</div>
	</div>

	<div class="lap-slider">
		<div class="lap-title">
			<marquee><h3>Best Quality Grocery</h3></marquee>
		</div>

		<div class="lap-con-holder">

			<div class="caro lap-content">
				<?php
				$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM grocerydataset LIMIT 10");
				while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="lap">
						<a href="discription.php?id='.$pid.'&cat=4" target="_blank">
						<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img">
						<p id="lap-pname">'.$pname.'</p>
						<p>Now at &#8377 '.$pprice.'</p>
						</a>
						</div>
						';
					}
				?>
			</div>

			<!--<i class="fas fa-chevron-left fa-2x lapprev"></i>
			<i class="fas fa-chevron-right fa-2x lapnext"></i>-->
		</div>
	</div>

	<div class="lap-slider">
		<div class="lap-title">
			<marquee><h3>Fresh Vegetables</h3></marquee>
		</div>

		<div class="lap-con-holder">

			<div class="caro lap-content">
				<?php
				$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM vegetabledataset LIMIT 10");
				while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="lap">
						<a href="discription.php?id='.$pid.'&cat=5" target="_blank">
						<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img">
						<p id="lap-pname">'.$pname.'</p>
						<p>Now at &#8377 '.$pprice.'</p>
						</a>
						</div>
						';
					}
				?>
			</div>

			<!--<i class="fas fa-chevron-left fa-2x lapprev"></i>
			<i class="fas fa-chevron-right fa-2x lapnext"></i>-->
		</div>
	</div>

	<div class="lap-slider">
		<div class="lap-title">
			<marquee><h3>Fresh Fruits</h3></marquee>
		</div>

		<div class="lap-con-holder">

			<div class="caro lap-content">
				<?php
				$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM fruitdataset LIMIT 10");
				while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="lap">
						<a href="discription.php?id='.$pid.'&cat=6" target="_blank">
						<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img">
						<p id="lap-pname">'.$pname.'</p>
						<p>Now at &#8377 '.$pprice.'</p>
						</a>
						</div>
						';
					}
				?>
			</div>

			<!--<i class="fas fa-chevron-left fa-2x lapprev"></i>
			<i class="fas fa-chevron-right fa-2x lapnext"></i>-->
		</div>
	</div>

	<div class="lap-slider">
		<div class="lap-title">
			<marquee><h3>Best Combo Offers on Beverages</h3></marquee>
		</div>

		<div class="lap-con-holder">

			<div class="caro lap-content">
				<?php
				$select = mysqli_query($conn,"SELECT id,Product_name,Product_img,Product_price FROM beveragedataset LIMIT 10");
				while($s = mysqli_fetch_array($select)){
						$pid = $s['id'];
						$pname = $s['Product_name'];
						$pimg = $s['Product_img'];
						$pprice= $s['Product_price'];

						echo '
						<div class="lap">
						<a href="discription.php?id='.$pid.'&cat=7" target="_blank">
						<img src = "'.$pimg.'" alt="'.$pname.'" id="lap-dell-1-img">
						<p id="lap-pname">'.$pname.'</p>
						<p>Now at &#8377 '.$pprice.'</p>
						</a>
						</div>
						';
					}
				?>
			</div>

			<!--<i class="fas fa-chevron-left fa-2x lapprev"></i>
			<i class="fas fa-chevron-right fa-2x lapnext"></i>-->
		</div>
	</div>

	<div class="footer">
		<div class="foot-content">
			<div id="foot-logo">
				<a href="../analytics/login.php"><img src="../pics/logo_icon.png" alt="logo"></a>
				<p style="margin-top : 10px">Expressso Shopping</p>
			</div>
			<div id="foot-main">
				<p>Main</p>
				<ul>
					<li><a href="Home Page.php">Home</a></li>
					<li><a href="Home Page.php">Shop</a></li>
					<li><a href="contacts.php">About Us</a></li>
					<li><a href="#">FAQs</a></li>
				</ul>
			</div>
			<div id="foot-resources">
				<p>Resources</p>
				<ul>
					<li><a href="contacts.php">Contact Us</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
			<div id="foot-legal">
				<p>Legal</p>
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div id="foot-social">
				<p>Social</p>
				<ul>
					<li><a href="https://www.facebook.com/login/" target="_blank">Facebook</a></li>
					<li><a href="https://twitter.com/login?lang=en" target="_blank">Twitter</a></li>
					<li><a href="https://www.linkedin.com/login?fromSignIn=true" target="_blank">LinkedIn</a></li>
				</ul>
			</div>
		</div>

		<div class="foot-base1">
	        <hr>
	        <div style="display: flex;">
	            <p>Copyrights © 2021 <br>Expressso.in | All rights reserved.</p>
	            <p style="padding-left: 52.7%;">For any query email at <a href="mailto: teamspritis@gmail.com?subject=The%20subject&body=Please%20list%20out%20your%20queries%20and%20send%20it%20to%20us." id="email-id">teamspritis@gmail.com</a></p>
	        </div>
    	</div>

	</div>
<?php include 'analytics.php'; ?>
</body>
</html>
