<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","mutualfund");
//echo "welcome ".$_SESSION['user_name'];
$userprofile=$_SESSION['user_name'];

$query="SELECT * FROM signup WHERE user='$userprofile'";
$image_query=mysqli_query($con,"select 'image' from 'signup' where user='$userprofile' ");
$data=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($data);
while($result=mysqli_fetch_array($image_query))
{
	$img_scr=$result['image'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="owl.theme.default.css">
    <link rel="stylesheet" href="doctorslider.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
a{
    color:black;
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: black;
  opacity:0.8;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

  </style>
</head>
<body>
<!--
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1> Plan your investments </h1>
  <p></p> 
</div>-->
<section style="width: 96%;margin:auto;">
   <div class="container mt-3">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <div class="id1">
                        <img class="im"src="1.jpg" alt="doctors">
                    </div>
                        <div class="card-body">
                            <br> <br>
                           <div class="id2">Computer Science<br></></div>
                           <p class="id3">Hod/Dr. S.Karthikeyan </p>
                            <p style="padding-left:10px;"> <span style="font-weight: bold;">Loerm Ipsum</span> The department of Computer Science was established in the year 1987.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="card">
                        <div class="id1">
                        <img class="im" src="2.jpg" alt="doctors">
                        </div>
                      <div class="card-body">
                            <br> <br>
                           <div class="id2">Computer Science<br></></div>
                           <p class="id3">Hod/Dr. S.Karthikeyan </p>
                            <p style="padding-left:10px;"> <span style="font-weight: bold;">Loerm Ipsum</span> The department of Computer Science was established in the year 1987.
</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="3.jpg" alt="doctors">
                        <div>
                            <br> <br>
                            <div class="id2">Shri Vishwanath Mandir<br> </></div>
                            <p class="id3">Completed: 1965</p>
                             <p style="padding-left:10px;"> <span style="font-weight: bold;"> Banaras Hindu University is hence home to one of the biggest tourist attractions in the city of Varanasi, the grand New Vishwanath Temple.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="4.jpg" alt="doctors">
                        <div> <br> <br>
                            <div class="id2">Indian Institute of Technology (BHU)/Gate<br> D.M</></div>
                            <p class="id3">Founded: 1919</p>
                             <p style="padding-left:10px;"> Indian Institute of Technology Varanasi is a public engineering and research institution located in Varanasi, Uttar Pradesh, India.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="5.jpg" alt="doctors">
                        <div>
                            <br> <br>
                           <div class="id2">Dalmia Hostel<br> D.M</></div>
                           <p class="id3">BHU</p>
                            <p style="padding-left:10px;"> <span style="font-weight: bold;">Banaras Hindu University is a residential University with 55 hostels</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="12.jpg" alt="doctors">
                        <div>
                            <br> <br>
                            <div class="id2">BHU BEAUTY<br> D.M</></div>
                            <p class="id3">Good Atomsphere</p>
                             <p style="padding-left:10px;"> <span style="font-weight: bold;">Banaras Hindu University has a walled campus spread over 1360 acres. Within the campus a large number of trees, shrubs, herbs, climbers and lianas are present.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="id1">
                        <img class="im" src="1.jpg" alt="doctors">
                    </div>
                        <div class="card-body">
                            <br> <br>
                           <div class="id2">Computer Science<br></></div>
                           <p class="id3">Hod/Dr. S.Karthikeyan </p>
                            <p style="padding-left:10px;"> <span style="font-weight: bold;">Loerm Ipsum</span> The department of Computer Science was established in the year 1987.
</p>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="card">
                        <div class="id1">
                        <img class="im"src="2.jpg" alt="doctors">
                        </div>
                      <div class="card-body">
                            <br> <br>
                           <div class="id2">Computer Science<br></></div>
                           <p class="id3">Hod/Dr. S.Karthikeyan </p>
                            <p style="padding-left:10px;"> <span style="font-weight: bold;">Loerm Ipsum</span> The department of Computer Science was established in the year 1987.
</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="3.jpg" alt="doctors">
                        <div>
                            <br> <br>
                            <div class="id2">Shri Vishwanath Mandir<br> </></div>
                            <p class="id3">Completed: 1965</p>
                             <p style="padding-left:10px;"> <span style="font-weight: bold;"> Banaras Hindu University is hence home to one of the biggest tourist attractions in the city of Varanasi, the grand New Vishwanath Temple.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="4.jpg" alt="doctors">
                        <div> <br> <br>
                            <div class="id2">Indian Institute of Technology (BHU)/Gate<br> D.M</></div>
                            <p class="id3">Founded: 1919</p>
                             <p style="padding-left:10px;"> Indian Institute of Technology Varanasi is a public engineering and research institution located in Varanasi, Uttar Pradesh, India.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="5.jpg" alt="doctors">
                        <div>
                            <br> <br>
                           <div class="id2">Dalmia Hostel<br> D.M</></div>
                           <p class="id3">BHU</p>
                            <p style="padding-left:10px;"> <span style="font-weight: bold;">Banaras Hindu University is a residential University with 55 hostels</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img class="im" src="12.jpg" alt="doctors">
                        <div>
                            <br> <br>
                            <div class="id2">BHU BEAUTY<br> D.M</></div>
                            <p class="id3">Good Atomsphere</p>
                             <p style="padding-left:10px;"> <span style="font-weight: bold;">Banaras Hindu University has a walled campus spread over 1360 acres. Within the campus a large number of trees, shrubs, herbs, climbers and lianas are present.</p>
                        </div>
                    </div>
                </div>

                

            </div>

        </div>
    </div>
    




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="owl.carousel.js"></script>
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
autoplay:false
autoplayTimeout:5000
autoplayHoverPause:false
</script>
</section>

<!--------------close slider---------------------------->



<nav class="navbar navbar-expand-sm  navbar-dark" style="background-color:lightblue;">
  <a class="navbar-brand" href="#" style="color: black;">Mutual fund</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="buy1.php"  style="color: black;">SBI Mutual funds</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buy.php"  style="color: black;">Kotak Mahindra mutual funds </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"  style="color: black;">ICICI Bank mutual funds</a>
      </li>    
      <li class="nav-item">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                              buy now
                    </button>
      </li> 
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h2> <?php echo $rows['user'];?></h2>
      <h5><?php echo $rows['email'];?></h5>
      <img class="card-img-top" src="Images\Images\Expert.png" alt="Card image cap">
     '
      <h3>See your Investments</h3>
      
      <ul class="nav nav-pills flex-column">
        <li class="nav-item" style="background-color:rgb(36,216,171);">
          <a class="nav-link active" href="buy1.php">SBI mutual funds</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Your mutual funds history</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Your investments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    <div class="col-sm-8 container" style="margin-top: 80px; margin-bottom:80px;">
        
        <div class="card-deck">
            <div class="card" >
            
              <img class="card-img-top" class="image" src="Images\Images\sbi.jpg" alt="Card image cap">
              <div class="middle">
               <div class="text" style="color:white;">Hello Worldhvyguyf ugyguyfv byugygyukfffffffff</div>
            </div>
              <div class="card-body" style="background-color: lightblue;">
                <h5 class="card-title">SBI bluechip fund</h5>
                <p class="card-text">Return since inception</p>
                <h2>10.81%</h2>
                <h4>Moderately high</h3>
                <p class="card-text"><small class="text-muted"></small></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                              buy now
                    </button>
              </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to but this scheme?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      By clicking confirm buy the scheme will be added to your cart.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirm buy</button>
      </div>
    </div>
  </div>
</div>
            </div>
            <div class="card">
              <img class="card-img-top" src="Images\Images\sbi2.jpg" alt="Card image cap">
              <div class="card-body" style="background-color: lightblue">
                <h5 class="card-title">SBI small cap fund</h5>
                <p class="card-text">Return since inception</p>
                <h2>17.65%</h2>
                <h4>Moderately high</h4>
                <p class="card-text"><small class="text-muted"></small></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">buy now</button>
                    
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="Images\Images\sbi4.png" alt="Card image cap">
              <div class="card-body" style="background-color: lightblue">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Return since inception</p>
                <h2>15.57%</h2>
                <h4>Moderately high</h4>
                <p class="card-text"><small class="text-muted"></small></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> buy now</button>
                                             
                    
              </div>
            </div>
</div>
<!--
<div class="jumbotron text-center" style="margin-bottom:20px">
  <p>Footer</p>
</div>-->

</hr>

<!-- Footer -->
<div class="container-fluid" style=" margin-top:50px; width:100%;">
<footer class="page-footer font-small unique-color-dark" style="margin-top:10px">

  
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">mutual Fund</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>A mutual fund is a professionally managed investment fund that pools money from many investors to purchase securities. These investors may be retail or institutional in nature. Mutual funds have advantages and disadvantages compared to direct investing in individual securities</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
</body>
</html>
