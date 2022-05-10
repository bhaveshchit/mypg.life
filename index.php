<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>mypg.life</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Carattere&display=swap');

</style>
</head>
<body>
    <?php
    require_once('header/headers.php');
    include_once('db/connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>

<br><br>
<div class="container">
    
<div class="row">
  <div class="col-md-12">
  <h1 style="text-align:center;"> <span style="font-family: 'Abril Fatface', cursive;">mypg.</span><span style="color:red; font-family: 'Pacifico', cursive;">life</span></h1>
  </div>
</div>

<div class="row">

  <div class="col-md-12">
  <div class="selectdiv">
    <form action="jack.php" method="post">
  <label>

 
   <select name="gender">
          <option selected> Gender  </option>
          <option value="male">Male</option>
          <option value="female">female</option>
         
      </select>

      <select name="area">
      <option selected> AREA </option>
          <option value="pratapnagar">pratap nagar</option>
          <option value="laalkothi">Lalkothi</option>
          <option value="jagatpura"> Jagatpura </option>
      </select>
      <input type="submit" name="submit" value="Search" class="btn btn-dark " >

  </label>
</form>
</div>
 </div>
</div>
<?php


?>














<div class="row">
   <div class="col-md-6">
     <img src="webimage/f.jpg" alt="" style="max-width:100%; border-radius:10px; display:flex; justify-content:center; align-items:center;">
   </div>

   <div class="col-md-6">
     <h1 style="text-align:center; margin-top:60px; color:#ff3d71;">we're providing instant and speedy service.</h2>
   </div>

</div>

<br><br><br>

<div class="row">
  <div class="col-md-12">
    <div class="intro" style="background-color:#ffa28f; padding:40px; border-radius:20px;">
      <h1 style="font-family: 'Carattere', cursive; text-align:center;">Find, what is perfect for you or the one that defines you.</h3>
    </div>
  </div>
</div>


<br><br>
<div class="row">
  <div class="col-md-3" style="padding:10px;">
    <div class="intr" style="background-color:#CD83FB; padding:40px; border-radius:20px;">
      <h1 style="text-align:center;">100+</h1>
      <h3 style="text-align:center;">Properties </h3>
    </div>
  </div>

  <div class="col-md-3" style="padding:10px;">
    <div class="intr" style="background-color:#DAAED6; padding:40px; border-radius:20px;">
      <h1 style="text-align:center;">24/7</h1>
      <h3 style="text-align:center;">Service Available</h3>
    </div>
  </div>

  <div class="col-md-3" style="padding:10px;">
    <div class="intr" style="background-color:#EA0E42; padding:40px; border-radius:20px;">
      <h1 style="text-align:center;">0</h1>
      <h3 style="text-align:center;">No Comission</h3>
    </div>
  </div>

  <div class="col-md-3" style="padding:10px;">
    <div class="intr" style="background-color:#FBB53C; padding:40px; border-radius:20px;">
      <h1 style="text-align:center;">Budget</h1>
      <h3 style="text-align:center;">Budget Friendly</h3>
    </div>
  </div>

</div>



<br><br>


<div class="row">
  <div class="col-md-12">
    <h1 style="text-align:center;">Fully Faciliated Room</h1>
  </div>
</div>


<br><br>

<div class="row">
  <div class="col-md-4">
    <img src="webimage/j.jpeg" alt="" style="max-width:100%;">
  </div>
  <div class="col-md-4">
    <img src="webimage/h.jpeg" alt="" style="max-width:100%;">
  </div>
  <div class="col-md-4">
    <img src="webimage/g.jpeg" alt="" style="max-width:100%;">
  </div>
</div>

<br><br>


<div class="row">
  <div class="col-md-12">
    <div class="v" style="padding:20px; background-color:000; border-radius:20px;">
    <h1 style="text-align:center;"> <span style="color:#CD6969;">Win</span> A <span style="color:#4455AB;">Cash Back</span> Of Rs. upto <span style="color:#8E0000;">500</span> On Your First Booking.</h1>
    </div>
  </div>
</div>




</div>
 


<br><br>

<!-- Footer -->
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



</body>
</html>