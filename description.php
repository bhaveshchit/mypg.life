<?php



?>




<?php
include("header/headers.php");
include("db/connectvars.php");
//include("functions/function.php");
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (isset($_GET['id'])){
  $_SESSION['id'] = $_GET['id'];
  $id = $_SESSION['id'];
}
//if(isset($_COOKIE['user_id'])){

//  $_SESSION['user_id'] = $_COOKIE['user_id'];


  $query = "select * from product where id = $id";
$run = mysqli_query($dbc,$query);
while($row = mysqli_fetch_assoc($run)){
?>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"  >
      <img class="d-block w-100"  src="product_images/<?php echo $row['img1']; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="product_images/<?php echo $row['img2']; ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="product_images/<?php echo $row['img3']; ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
    </div>
<br><br><br>
<div class="row">
    <div class="col-md-12" style=" text-align:center;">
        <h6>Area : <span style="opacity:0.9;"> <?php echo $row['mainarea']; ?></span> </h6>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-4"  style=" text-align:center;">
<h6><i class="fas fa-user-alt"></i>Occupancy: <span style="opacity:0.9;"><?php echo $row['occupancy'];?></span></h6>
    </div>
    <div class="col-md-4"  style=" text-align:center;">
<h6><i class="fas fa-user-alt"></i>Gender: <span style="opacity:0.9;"><?php echo $row['gender']; ?></span></h6>
    </div>
    <div class="col-md-4" style=" text-align:center;">
<h5>Price: <span style="opacity:0.9; color:red;"><?php echo $row['price'];?></span></h5>
    </div>
</div>
<br><br>
<div class="row">
<div class="col-md-4" style=" text-align:center;">
    <h6>Furnished: </h6><p style="font-size:10px;"><ul style="list-style:none;"><li>bed</li><li>almirah</li><li>fan</li></ul></p>
</div>
<div class="col-md-4"  style=" text-align:center;">
   <h6>Nearest Institutions</h6><p><ul style="list-style:none;"><li><h6><?php echo $row['near1'];?></h6></li><li><h6><?php echo $row['near2'];?></h6></li><li><h6><?php echo $row['near3'];?></h6></li></ul></p>
</div>
<div class="col-md-4" style=" text-align:center;">
<h6>Requirements</h6><p><ul style="list-style:none;"><li><i class="fas fa-tint"></i> 24/7 Water </li><li><i class="fas fa-user-secret"></i> Security</li><li><i class="fas fa-utensils"></i> Nearest Eating Points</li></ul></p>
</div>
<br><br>
<br><br>


</div>
<br>
<div class="row">
  <div class="col-md-12">
    <h6>Property Id: <span style="opacity:0.9; color:red;">JPR2000<?php echo $row['id'];?></span></h6>
  </div>
</div>


<br><br>
<div class="row">
    <div class="col-md-12 buts"  style= "text-align:center;" >
        <br><br>
        <a href="tel:">+918239581971</a>
    </div>
    
</div>

<br><br>











</div>
<?php } ?>
<footer class="text-center text-lg-start text-muted" style="background:#fff url('webimage/1.jpg') no-repeat ; ">
    <div class="foot">
  <!-- Section: Social media -->
<br>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class=" mb-4">
            <span style="font-family: 'Abril Fatface', cursive;">mypg.</span><span style="color:red; font-family: 'Pacifico', cursive;">life</span>
          </h6>
          <p>
            find your desired room in just few minutes without any hassle.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Room finding</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Security</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Facilities</a>
          </p>
        
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> plot 73 pashupatinathnagar , jaipur</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contact@mypg.life
          </p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            lifemypg@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 8824991267</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
</div>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="mypg.life">mypg.life</a>
  </div>
  
  <!-- Copyright -->
</footer>
<!-- Footer -->
<?php// } else {
 // include_once("signup.php");
//} ?>