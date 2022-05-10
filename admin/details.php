<?php

include('../db/connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
include('../header/headers.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>


<style>

.formss{
    display:flex;
    margin-top:30%;
    align-items:center;
    justify-content:center;
}
ul{
    text-decoration:none;
    list-style-type:none;
}

h1{
    text-align:center;
    margin-top:10%;
}
</style>


</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-md-12">
                 <h1>Admin Area</h1>
                 <div class="formss">
                 <form action="details.php" method="post">
                 <input type="text"  name="id"  placeholder="Search by id">
                 <input type="submit" name="submit" value="Search" class="btn btn-dark " >
                 </form>
                 </div>
             </div>
        </div>
    


<br><br>


<?php

if(isset($_POST['submit'])){
$id = $_POST['id'];


$query = "select * from product where id = '$id'";
$run  = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($run)){
   ?>


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
      <img class="d-block w-100"  src="../product_images/<?php echo $row['img1']; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../product_images/<?php echo $row['img2']; ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../product_images/<?php echo $row['img3']; ?>" alt="Third slide">
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

<div class="row">
    <div class="col-md-12">
        <h1><?php echo $row['Name'];?></h1>
        <br>
        <h3> <?php echo $row['complete_address'];?> </h3>
        <br><br>
        <h3><?php echo $row['owner_phone'];?></h3>
        <br><br>
        <h3><?php echo $row['altowner_phone'];?></h3>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <h2>area</h2>
        <ul>
        <li><h4>area: <?php echo $row['area'];?></h4></li>
            <li><h4>near1: <?php echo $row['near1'];?></h4></li>
            <li><h4>near2: <?php echo $row['near2'];?></h4></li>
            <li><h4>near3: <?php echo $row['near3'];?></h4></li>
            <li><h4>main-area: <?php echo $row['mainarea'];?></h4></li>
        </ul>
    </div>
    <div class="col-md-6">
       <h4> avaibility:<?php echo $row['status'];?></h4>
       <h4>rooms: <?php echo $row['rooms'];?></h4> 
       <h4>gender: <?php echo $row['gender'];?></h4>
       <h4>occupancy: <?php echo $row['occupancy'];?></h4>
       <h4>price: <?php echo $row['price'];?></h4>
       <h4>special monument: <?php echo $row['landmark'];?></h4>

    </div>
    



</div>









</div>





<?php
}
}
?>



</body>
</html>


