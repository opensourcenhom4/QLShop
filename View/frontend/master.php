<!DOCTYPE html>
<html>
<head>
	<title>Shop Fooshoes</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Public/frontend/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Public/frontend/bootstrap/css/bootstrap.css">
  <script src="Public/frontend/jquery/jquery.min.js"></script>
  <script src="Public/frontend/bootstrap/js/popper.min.js"></script>
  <script src="Public/frontend/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Public/frontend/icofont/icofont.css">
  <link rel="stylesheet" type="text/css" href="Public/frontend/css/index.css">
    <!--build:css css/common.min.css-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,500i,600,600i,700&display=swap" rel="stylesheet"> -->
</head>
<body>
	<div class="header">
		<div class="header__topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="topbar-info">
							<span class="topbar-info__item">
								<a href="tel:1900892892">
									<i class="icofont-telephone"></i>
									1900.892.892
								</a>
							</span> 
							<span class="mail topbar-info__item">
								<a href="mailto:dat.fithou@gmail.com">
									<i class="icofont-envelope"></i>
									info@email.com
								</a>
							</span>
						</div>
					</div>
					<div class="col-lg-6 text-lg-right">
						<?php if (isset($_SESSION['email'])) {	?>
						<div class="topbar-info infor-card" >
							<span class="topbar-info__item dropdown-toggle" data-toggle="dropdown" >
								<a href="#" ><i class="icofont-user"></i><?php echo $_SESSION['email']; ?>
								</a>
								 <div class="dropdown-menu bg-dark">
						            <a class="dropdown-item" href="#">Thông tin cá nhân</a>
						            <a class="dropdown-item" href="index.php?controller=logout">Logout</a>
						          </div>
							</span> 
							<span class="mail topbar-info__item">
								<a href="index.php?controller=cart"><i class="icofont-shopping-cart"></i>
								Có <strong>
		                         <?php 
		                            if(isset($_SESSION["cart"])){
		                                $total = 0;
		                                foreach ($_SESSION["cart"] as $value) {
		                                    $total++;
		                                }
		                                echo $total;
		                            }
		                          ?>   
		                        </strong> sản phẩm trong giỏ hàng của bạn</span></a>
									</span>
								</div>
					<?php } else{ ?>
						<div class="topbar-info">
							<span class="topbar-info__item">
								<a href="index.php?controller=login&act=login"><i class="icofont-lock"></i>
								Login</a>
							</span> 
							<span class="mail topbar-info__item">
								<a href="index.php?controller=login&act=register"><i class="icofont-user"></i>
								Register</a>
							</span>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="header__mainbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 align-self-lg-center">
						<div class="site-indentify">
							<a href="site-indentify__logo" style="color: pink;">
								<h1>FOOSHOES</h1>
							</a>
						</div>
					</div>

					<div class="col-lg-10">
						<div class="menu-search">
							<div class="menu">
								<nav>
								<ul class="menu__list">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="">Tin tức</a>
										<ul class="menu__list-sub">
											<?php include 'Controller/frontend/controller_category_news.php'; ?>
										</ul>
									</li>
									<li>
										<a href="#">Sản phẩm</a>
										<ul class="menu__list-sub">
											<li><a href="index.php?controller=product&id.php">Hãng sản phẩm</a></li>
											<li><a href="index.php?controller=product_1&id.php">Loại sản phẩm</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Liên hệ</a>
									</li>
									<li>
										<a href="#">Contact us</a>
									</li>
								</ul>
								</nav>

							</div>
							<div class="search">
								<form>
									<input type="input" name="search" class="search__input" placeholder="enter key words">
									<button class="search__submit" type="submit">
										<i class="icofont-search"></i>
									</button>
								</form>
							</div>
							
						
						</div>
					</div>
						</div>

					</div>
					
					</div>
				</div>
			</div>
		</div>
<!-- end header -->
<div class="slideshow" style="background-color: #ddd;">
	<div class="container">
		<div class="row">
	<div id="container">
	  <div class="mySlides">
	    <div class="numbertext">1 / 5</div>
	    <img src="Public/frontend/img/slider-image1.jpg" style="width:100%">
	  </div>
	  <div class="mySlides">
	    <div class="numbertext">2 / 5</div>
	    <img src="Public/frontend/img/slider-image2.jpg" style="width:100%">
	  </div>
	  <div class="mySlides">
	    <div class="numbertext">3 / 5</div>
	    <img src="Public/frontend/img/slider-image3.jpg" style="width:100%">
	  </div>
	    
	  <div class="mySlides">
	    <div class="numbertext">4 / 5</div>
	    <img src="Public/frontend/img/slider-image4.jpg" style="width:100%">
	  </div>

	  <div class="mySlides">
	    <div class="numbertext">5 / 5</div>
	    <img src="Public/frontend/img/slider-image5.jpg" style="width:100%">
	  </div>
	    
	  <a class="prev" onclick="plusSlides(-1)">❮</a>
	  <a class="next" onclick="plusSlides(1)">❯</a>

	  <div class="caption-container">
	    <p id="caption"></p>
	  </div>

	  <div class="row">
	    <div class="column">
	      <img class="demo cursor" src="Public/frontend/img/slider-image1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
	    </div>
	    <div class="column">
	      <img class="demo cursor" src="Public/frontend/img/slider-image2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
	    </div>
	    <div class="column">
	      <img class="demo cursor" src="Public/frontend/img/slider-image3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
	    </div>
	    <div class="column">
	      <img class="demo cursor" src="Public/frontend/img/slider-image4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
	    </div>
	    <div class="column">
	      <img class="demo cursor" src="Public/frontend/img/slider-image5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
	    </div>    
	  </div>
	</div>
	<script type="text/javascript">
		   var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  var captionText = document.getElementById("caption");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	  captionText.innerHTML = dots[slideIndex-1].alt;
	   slides[slideIndex-1].className += " active";
	    setTimeout(showSlides, 5000);
	}
	</script>
</div>
	</div>
</div>
<!-- content -->
 <div class ="content">        	
        <div class="container">
        	<div class="row">
	            <!-- begin left -->
	            <div class="col-lg-3 left-col">
	               <?php include "Controller/frontend/controller_category.php"; ?>
	            	 <?php include "Controller/frontend/controller_product_type.php"; ?>
	                <!-- support -->
	                <div class="support">
	                    <div class="support_title">Hỗ trợ bán hàng</div>
	                    <div>
	                        <i class="icofont-facebook-messenger" style="font-size: 35px; color: blue;"></i>
	                    </div>
	                    <div class="support_title">Hỗ trợ bán hàng</div>
	                    <div class="support_ym">
	                       <i class="icofont-phone-circle"style="font-size: 35px; color: blue;"></i>
	                    </div>
	                </div>
	            </div>
            <!-- end left --> 
            <!-- begin right -->  
		         <div class="col-lg-9 right-col">
		            <!-- ----------------- -->
		          <?php
		           //load controller
		          if(file_exists($controller))
		            include $controller;
		         		 //include "View/frontend/view_card.php";
		    		?> 
		         </div>
           </div>
        </div>
    </div>
<!-- endcontent -->
	<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="row">
			<div class="t-footer">
				<div class="col-lg-4 lhe">
					<img src="Public/frontend/img/logo.png">
					<p>Nullam ac justo efficitur, tristique ligula. Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					<div class="list__lhe">
						<a href="#"><i class="icofont-location-pin"></i>32/21 King Street, New York, US</a>
						<a href="tel.1900892892"><i class="icofont-telephone"></i>1900.892.892</a>
						<a href="mailto:dat.fithou@gmail.com"><i class="icofont-envelope"></i>info@email.com</a>
					</div>
				</div>
				<div class="col-lg-4 lastnews">
					<b>Lastest News</b>
					<div>
						<a href="#">Real-Life Experience of Essential Animal Conservation</a>
					</div>
					<div class="line"></div>
					<div>						
						<a href="#">Real-Life Experience of Essential Animal Conservation</a>
					</div>
				</div>
				<div class="col-lg-4 topdes">
					<b>Top Destinations</b>
					<div class="list__hot">
						<div class="row">
							<div class="test">
								<a href="#"><b>America</b></a>
								<img src="Public/frontend/img/f_pic1.jpg">
							</div> 
							<div class="test">
								<a href="#"><b>Europe</b></a>
								<img src="Public/frontend/img/f_pic2.jpg">
							</div>
							<div class=" test">
								<a href="#"><b>Asia</b></a>
								<img src="Public/frontend/img/f_pic3.jpg">
							</div>
							<div class=" test">
								<a href="#"><b>Africa</b></a>
								<img src="Public/frontend/img/f_pic5.jpg">
							</div>
							<div class=" test">
								<a href="#"><b>South America</b></a>
								<img src="Public/frontend/img/f_pic4.jpg">
							</div>
							<div class=" test">
								<a href="#"><b>Eastern Europe</b></a>
								<img src="Public/frontend/img/f_pic6.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btg">
				<div class=" bt"><img src="Public/frontend/img/lg1.jpg"></div>
				<div class=" bt"><img src="Public/frontend/img/lg2.jpg"></div>
				<div class=" bt"><img src="Public/frontend/img/lg4.jpg"></div>
				<div class=" bt"><img src="Public/frontend/img/lg3.jpg"></div>
			</div>
			<div class="col-lg-3 ic">
				<div class="ic__item">
					<a href="#"><i class="icofont-facebook"></i></a>
					<a href="#"><i class="icofont-twitter"></i></a>
					<a href="https://www.youtube.com/"><i class="icofont-youtube-play"></i></a>
					<a href="#"><i class="icofont-pinterest"></i></a>
				</div>
				<h6>© Designed by Vietevo</h6>
			</div>
		</div>
	</div>
</div>
<!-- end footer -->
</body>
</html>