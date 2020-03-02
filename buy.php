<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","mutualfund");

$userprofile=$_SESSION['user_name'];

$query="SELECT * FROM signup WHERE user='$userprofile'";
$data=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($data);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
a{
    color:black;
}
body{
  
}

  </style>
</head>
<body>
<!--
<div class="jumbotron text-center" style="margin-bottom:0; background-color:#dcf8ec;">
  <h1><?php echo "welcome ".$_SESSION['user_name']; ?> Plan your investment</h1>
  <p></p> 
</div>-->


<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/Images/c1.jpg" alt="Los Angeles" width="1600" height="300">
      <div class="carousel-caption">
        <h3 style="color:black;"></h3>
        <p style="color:black;"></p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="Images/Images/c2.jpg"alt="Chicago" width="1600" height="300">
    </div>
    <div class="carousel-item">
      <img src="Images/Images/c3.jpg"alt="New York" width="1600" height="300">
    </div>
    <div class="carousel-item">
      <img src="Images/Images/c4.jpg"alt="Chicago" width="1600" height="300">
    </div>
    <div class="carousel-item">
      <img src="Images/Images/c5.jpg"alt="New York" width="1600" height="300">
    </div>
  </div>
  
  <!-- Left and right controls 
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>-->


<nav class="navbar navbar-expand-sm  navbar-dark" style="background-color:#8eebc2;">
  <a class="navbar-brand" href="#" style="color: black;">Mutual fund</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="buy1.php"  style="color: black;">SBI MUTUAL FUND</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buy.php"  style="color: black;">KOTAK MAHINDRA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"  style="color: black;">ICICI BANK</a>
      </li>   
      <li class="nav-item" style="float:right;">
      <form action="history.php" method="POST">
      <button type="submit" class="btn btn-primary" name="see" data-toggle="modal" data-target="#exampleModal" style="background-color:rgb(36,216,171);">
        See your investments history
      </button>
      </form>
      </li>  
    </ul>
  </div>  
</nav>



  <div class="container" style="margin-top:50px;background-color:yellow;">
    <div style=" float:left;">
      <img src="<?php echo $rows['image'];?>" style="height:200px;width:200px;  padding:5px;border:1px solid green; border-radius:50%;">
    </div>
    <div style="float:left; padding:50px;">
      User: <?php echo $rows['user']; ?></br>
      Email-ID:<?php echo $rows['email']; ?></br>
      PAN number:<?php echo $rows['pan']; ?>
     </div> 
    </div>
  


  
    <div class="col-sm-8 container" style="margin-top: 300px; margin-bottom:80px;">
        
        <div class="card-deck">
            <div class="card" >
              <img class="card-img-top" src="Images\Images\what.jpg" style= "height:250px;width:305px;"alt="Card image cap">
              <div class="card-body" style="background-color: #dcf8ec;">
                <h5 class="card-title">SBI bluechip fund</h5>
                <p class="card-text">Return since inception</p>
                <h2>10.81%</h2>
                <h4>Moderately high</h3>
                <p class="card-text"><small class="text-muted"></small></p>
            <form action="table.php" method="POST"> 
              <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
              <input type="number" name="number" id="number" />
              <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value" placeholder="  how many copy"></div>
            
                <button type="button" class="btn btn-primary" data-toggle="modal" name="sbi" data-target="#exampleModal3"style="background-color:rgb(36,216,171);margin-top:5px;">
                                              Buy now
                </button>
                 
              </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to buy this scheme?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      By clicking confirm buy the scheme will be added to your cart.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="sbi1" class="btn btn-primary"style="background-color:rgb(36,216,171);">Confirm buy</button>
      </div>
           
    </div>
  </div>
</div></form> 
            </div>


            <div class="card">
              <img class="card-img-top" src="Images\Images\FLOwering.jpg"  style= "height:250px;width:305px;"alt="Card image cap">
              <div class="card-body" style="background-color:#dcf8ec;">
                <h5 class="card-title">SBI small cap fund</h5>
                <p class="card-text">Return since inception</p>
                <h2>17.65%</h2>
                <h4>Moderately high</h4>
                <p class="card-text"><small class="text-muted"></small></p>
            <form action="table.php" method="POST"> 
              <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
              <input type="number" name="number" id="number" />
              <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                <button type="button" class="btn btn-primary" name="sbi" data-toggle="modal" data-target="#exampleModal2" style="background-color:rgb(36,216,171);margin-top:5px;">buy now</button>
                    
              </div>
                  <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" name="sbi2" class="btn btn-primary" style="background-color:rgb(36,216,171);">Confirm buy</button>
      </div>
    </div>
  </div>
</div></form>
</div>



<div class="card">
              <img class="card-img-top" src="Images\Images\invest.jpg"  style= "height:250px;width:305px;"alt="Card image cap">
              <div class="card-body" style="background-color:#dcf8ec;">
                <h5 class="card-title">SBI chip fund</h5>
                <p class="card-text">Return since inception</p>
                <h2>15.57%</h2>
                <h4>Moderately high</h4>
                <p class="card-text"><small class="text-muted"></small></p>
            <form action="table.php" method="POST"> 
              <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
              <input type="number" name="number" id="number" />
              <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                <button type="button" class="btn btn-primary" name="sbi" data-toggle="modal" data-target="#exampleModal2" style="background-color:rgb(36,216,171);margin-top:5px;">buy now</button>
                    
              </div>
                  <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" name="sbi3" class="btn btn-primary" style="background-color:rgb(36,216,171);">Confirm buy</button>
      </div>
    </div>
  </div>
</div></form>
</div>




</div>
<!--
<div class="jumbotron text-center" style="margin-bottom:20px">
  <p>Footer</p>-->
</div>

</hr>

<!-- Footer -->
<div class="container-fluid" style=" margin-top:50px;">
<footer class="page-footer font-small unique-color-dark" style="margin-top:10px;">

  
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

</body>
</html>
