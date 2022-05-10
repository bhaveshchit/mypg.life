<?php

include("functions/function.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);




function random(){
$query1 = "select * from product order by rand() LIMIT 0,3";
$run1 = mysqli_query($dbc,$query);
while( $row1 = mysqli_fetch_array($run1)){
    $description = "description.php?id=" . $row1["id"]; 
?>

<div class="wrap">
<div class="left">
<a href="<?php echo $description ?>">
<img class="book block-center img-responsive" src="product_images/<?php echo $row['img1'] ?>"></a>
</div>
<div class="right">

<span class="desc">
<h4><?php  echo $row1['price']; ?></h4>
<p><?php echo $row1['occupancy'] ?> </p>
<p> <?php echo $row1['near1']; ?> </p>

</span> 
</div>
</div>
<?php
}
}



?>