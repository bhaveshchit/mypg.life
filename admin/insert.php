<?php
include_once('../db/connectvars.php');
include_once('../header/headers.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-12" style="text-align:center;">
               <h2>insert</h2>
           </div>
</div>


<div class="row">
    <div class="col-md-12">

    <form class="form-horizontal" method="post" enctype="multipart/form-data" ">

<ul style="list-style:none;">
    <li><h6><label for="" class="col-md-3">Image-1</label> 
    <input type="file" name="imgf"></h6>
   </li>
   <li><h6><label for="" class="col-md-3">Image-2</label> 
    <input type="file" name="imgs"></h6>
   </li>
   <li><h6><label for="" class="col-md-3">Image-3</label> 
    <input type="file" name="imgt"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">owner-Name</label> 
    <input type="text" name="oname"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">phone</label> 
    <input type="text" name="phone"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">alt-phone</label> 
    <input type="text" name="altphone"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">Status</label> 
    <input type="text" name="status"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">rooms</label> 
    <input type="text" name="rooms"></h6>
   </li>


   <li><h6><label for="" class="col-md-3">area</label> 
    <input type="text" name="area"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">near-1</label> 
    <input type="text" name="near1"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">near-2</label> 
    <input type="text" name="near2"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">near-3</label> 
    <input type="text" name="near3"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">Price</label> 
    <input type="text" name="price"></h6>
   </li>


   <li><h6><label for="" class="col-md-3">Occupancy</label> 
    <input type="text" name="occupancy"></h6>
   </li>


   <li><h6><label for="" class="col-md-3">Mainarea</label> 
    <input type="text" name="mainarea"></h6>
   </li>


   <li><h6><label for="" class="col-md-3">Gender</label> 
    <input type="text" name="gender"></h6>
   </li>
   <li><h6><label for="" class="col-md-3">Landmark</label> 
    <input type="text" name="landmark"></h6>
   </li>

   <li><h6><label for="" class="col-md-3">Full Address</label> 
    <input type="text" name="faddress"></h6>
   </li>

</ul>

<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >
<br><br>
</form>
  </div>
</div>
</div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $landmark = $_POST['landmark'];
    $phone = $_POST['phone'];
    $altphone = $_POST['altphone'];
    $rooms = $_POST['rooms'];
    $status = $_POST['status'];
$oname = $_POST['oname'];
$area = mysqli_real_escape_string($dbc,trim($_POST['area']));
$near1 = $_POST['near1'];
$near2 = $_POST['near2'];
$near3 = $_POST['near3'];
$price = $_POST['price'];
$occupancy = $_POST['occupancy'];
$mainarea = $_POST['mainarea'];
$gender = $_POST['gender'];
$full = $_POST['faddress'];


$product_img1 = $_FILES['imgf']['name'];
$product_img2 = $_FILES['imgs']['name'];
$product_img3 = $_FILES['imgt']['name'];

$temp_name1 = $_FILES['imgf']['tmp_name'];
$temp_name2 = $_FILES['imgs']['tmp_name'];
$temp_name3 = $_FILES['imgt']['tmp_name'];

move_uploaded_file($temp_name1,"../product_images/$product_img1");
move_uploaded_file($temp_name2,"../product_images/$product_img2");
move_uploaded_file($temp_name3,"../product_images/$product_img3");




    $insert = "insert into product (img1,img2,img3,area,near1,near2,near3,price,occupancy,mainarea,gender,complete_address,Name,status,rooms,owner_phone,altowner_phone,landmark) values ('$product_img1','$product_img2','$product_img3','$area','$near1','$near2','$near3','$price','$occupancy','$mainarea','$gender','$full','$oname','$status','$rooms','$phone','$altphone','$landmark')";
    $run = mysqli_query($dbc ,$insert);





if($run){
    echo "<script>alert('Product has been inserted successfully')</script>";
    echo "<script>window.open('insert.php','_self')</script>";

}
}


?>