<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","mutualfund");

$userprofile=$_SESSION['user_name'];

$query="SELECT * FROM signup WHERE user='$userprofile'";
$data=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Investment</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/carousel.css">

        <!-- Favicon and touch icons
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
-->
    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-dark fixed-top navbar-expand-md" style="background-color:lightgreen;">
			<div class="container">
				<a class="" href="index.html"></a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item">
			                <a class="nav-link scroll-link" href=""></a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link scroll-link" href="#section-1">Investments made easy for you</a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link scroll-link" href="#section-2"></a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link scroll-link" href="#section-3">Ways to invest</a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link scroll-link" href="#section-4"></a>
			            </li>
			        </ul>
			    </div>
		    </div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	<div class="container-fluid">
        		<div id="carousel-example" class="carousel slide" data-ride="carousel">
        			<div class="carousel-inner row w-100 mx-auto" role="listbox">
            			<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="Images/Images2/1.png" class="img-fluid mx-auto d-block" style="width:700px ; height: 280px;"  alt="img1">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="images/images2/2.jpg" class="img-fluid mx-auto d-block" alt="img2"style="width:700px ; height: 280px;">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="Images/Images2/3.jpg" class="img-fluid mx-auto d-block" alt="img3"style="width:700px ; height: 280px;">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="Images/Images2/4.jpg" class="img-fluid mx-auto d-block" alt="img4"style="width:700px ; height: 280px;">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="Images/Images2/5.png" class="img-fluid mx-auto d-block" alt="img5"style="width:700px ; height: 280px;">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="Images/Images2/6.jpg" class="img-fluid mx-auto d-block" alt="img6"style="width:700px ; height: 280px;">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="Images/Images2/7.jpg" class="img-fluid mx-auto d-block" alt="img7"style="width:700px ; height: 280px;">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="Images/Images2/9.jpg" class="img-fluid mx-auto d-block" alt="img8"style="width:700px ; height: 280px;">
						</div>
        			</div>
        			<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
        		</div>
        	</div>
        </div>

        <!-- Section 1 -->
        <div class="section-1-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col section-1 section-description wow fadeIn">
	                    <h1></h1>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                
	                    	<h2>Investments made Easy for you</h2>
	                    
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-md-4 section-1-box wow fadeInUp">
                		<div class="row">
                			<div class="col-md-4">
			                	<div>
                                <img src="Images/Images2/onboarding.png">
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Easy Customer On-boarding: </h3>
	                    		<p>All you need to do is complete your KYC process and register your email address to generate your username and password, before you start investing online in funds of your choice.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInDown">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div>
                                    <img src="Images/Images2/family.jpg">
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Family Solution Tool: </h3>
	                    		<p>With our Family Solution Tool, you can plan your investments and maximise returns in order to be financially capable of achieving the dreams and goals of your family members​.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div >
			                	<img src="Images/Images2/trans.png" >
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Financial Transactions:</h3>
	                    		<p> You can now complete financial transactions like investing in a scheme of your choice, switching your investments from one scheme to another or redeeming your investments from a particular scheme, online; in just a few clicks.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div>
			                		<img src="Images/Images2/compare.png">
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Compare Funds</h3>
	                    		<p>  Keep a track on the performance of funds and compare funds to see the change in their NAVs over a period of time, so that you can take informed decisions about your investments in different categories of funds.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div>
			                		<img src="Images/Images2/online1.png">
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Online Chat</h3>
	                    		<p> For any kind of assistance, you can chat with our expert online, who will answer queries and help you out to ensure that your online investment process is hassle-free and convenient.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div>
			                		<img src="Images/Images2/alert.png">
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3>Create Watch-lists and Alert Notifications: </h3>
	                    		<p>  If you want to proactively manage your investments based on a sound market understanding, the online portal lets you create watch-lists to keep a close track of your chosen funds and also set alert notifications so that the information you need and want is always at hand.</p>
	                    	</div>
	                    </div>
                    </div>
	            </div>
	        </div>
        </div>

        <!-- Section 2 
        <div class="section-2-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-2 section-description wow fadeIn">
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col section-2-box wow fadeInLeft">
                    	<h3>Section 2</h3>
                    	<p class="medium-paragraph">
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    		sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                    	</p>
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    		Ut wisi enim ad minim veniam, quis nostrud. 
                    		Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                    	</p>
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    		Ut wisi enim ad minim veniam, quis nostrud. 
                    		Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    	</p>
	                </div>
	            </div>
	        </div>
        </div>-->

		<!-- Section 3 -->
        <div class="section-3-container section-container">
	        <div class="container">
	        	
	            <div class="row">
	                <div class="col section-3 section-description wow fadeIn">
	                    <h2>Ways to invest</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div >
                                    <img src="Images/Images2/laptop.jpg">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Online</h3>
		                    	<p>
                                The SBI Mutual Fund online portal is a quick, convenient and efficient tool that lets you carry out and manage your investments online, by offering a host of services and facilities.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div>
                                    <img src="Images/Images2/offline.png">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Offline</h3>
		                    	<p>
                                Fill the application/KYC (if applicable) form, provide necessary information i.e. name, address, PAN, email address, mobile number, etc. This email address and mobile number will be used for further communication, and can also be used to register for online transaction services.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div>
                                <img src="Images/Images2/mobile.jpg">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Mobile App</h3>
		                    	<p>
                                Heralding a new era of mobile-ready investments, SBI MF invesTap is an intuitive, easy to use app that lets you perform all financial transactions on-the-go. You can browse through funds, plan for your financial goals, register, invest, switch, redeem and track performance to speed-up the journey to your dream life.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div>
                                <img src="Images/Images2/mobileapp.jpg">
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>m-Easy</h3>
		                    	<p>
                                Taking care of your investments and achieving your dreams is now easy. SBI Mutual Fund presents ‘m-Easy,’ a mobile investment facility which helps you Invest, Redeem and Switch from one scheme to another, via just an SMS. You can now manage your investments fro​m any place, anytime.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>

	        </div>
        </div>

		<!-- Section 4 
        <div class="section-4-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-4 section-description wow fadeInLeftBig">
	                	<h2>Section 4</h2>
	                    <p>
	                    	
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>-->

        <!-- Footer -->
        <footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div class="col">
                    	&copy; Copyright 2019 Mutal Funds. All rights reserved.</a>.
                    </div>
                    
                </div>
	        </div>
                	
        </footer>

        <!-- Javascript -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>