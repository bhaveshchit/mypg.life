<?php
include_once('header/headers.php');
include_once('db/connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//if(isset($_SESSION['gender'])) {



//	$gender = $_SESSION['gender'];




if (isset($_GET['value']) and isset($_GET['gender']) ){
    $_SESSION['value'] = $_GET['value'];
     $value = $_SESSION['value'];
	 $_SESSION['gender'] = $_GET['gender'];
	 $gender = $_SESSION['gender'];

	 } 

$per_page=20;
$start=0;
$current_page=1;
if(isset($_GET['start'])){
	$start=$_GET['start'];
	if($start<=0){
		$start=0;
		$current_page=1;
	}else{
		$current_page=$start;
		$start--;
		$start=$start*$per_page;
	}
}
$record=mysqli_num_rows(mysqli_query($dbc,"select * from product where area like '%{$_SESSION['value']}%' AND gender like '%{$gender}%'"));
$pagi=ceil($record/$per_page);

$sql="select * from product where area like '%{$_SESSION['value']}%' AND gender like '%{$gender}%'  limit $start,$per_page";
$res=mysqli_query($dbc,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hostel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .mt-100{margin-top:50px;}
  .mt-30{margin-top:30px;}
  .mb-30{margin-bottom:30px;}
  a{
      
  }
  </style>
</head>
<body>

<br>
<div class="container">
<div class="row">

	<?php 
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_assoc($res)){ 
        $description = "description?id=" . $row["id"]; ?>
       <div class="col-md-4">
<div class="wrap">
<div class="left">
<a href="<?php echo $description ?>">
<img class="book block-center img-responsive" src="product_images/<?php echo $row['img1'] ?>"></a>
</div>
<div class="right">

<span class="desc">
<h4><?php  echo $row['price']; ?></h4>
<p><?php echo $row['occupancy'] ?> </p>
<p> <?php echo $row['near1']; ?> </p>

</span> 
</div>
</div>

</div>
    <?php } } else {?>
	<h1 style="margin-top:30%; text-align:center;">Sorry nothing Available😔!</h1>
	<?php } ?>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12" >
        <ul class="pagination mt-30 d-flex justify-content-center" style="text-align:center;">
	<?php 
	for($i=1;$i<=$pagi;$i++){
	$class='';
	if($current_page==$i){
		?><li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i?></a></li><?php
	}else{
	?>
		<li class="page-item"><a class="page-link" href="?start=<?php echo $i?>"><?php echo $i?></a></li>
	<?php
	}
	?>
    
    
	<?php } ?>
  </ul>
        </div>
    </div>
</div>






<?php// }else{
	//echo'gender is not set';
//}?>




