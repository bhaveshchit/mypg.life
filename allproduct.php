<?php
include_once('header/headers.php');
include_once("db/connectvars.php");
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$per_page=3;
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
$record=mysqli_num_rows(mysqli_query($dbc,"select * from product"));
$pagi=ceil($record/$per_page);

$sql="select * from product limit $start,$per_page";
$res=mysqli_query($dbc,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagination Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="page/css/bootstrap.min.css">
  <script src="page/js/jquery.min.js"></script>
  <script src="page/js/bootstrap.min.js"></script>
  <style>
  .mt-100{margin-top:50px;}
  .mt-30{margin-top:30px;}
  .mb-30{margin-bottom:30px;}
  </style>
</head>
<body>


<div class="container">
<div class="row">

	<?php 
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_assoc($res)){?>
	



        <div class="col-md-4">

<div class="wrap">
<div class="left">

<img class="book block-center img-responsive" src="product_images/<?php echo $row['img1'] ?>">
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
	No records
	<?php } ?>




<ul class="pagination mt-30" style="text-align:center;">
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


















</body>
</html>


