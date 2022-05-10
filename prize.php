<?php
//session_start();

include_once('header/headers.php');
include_once('db/connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['id'];
$des = "description?id=" . $id; 



if(isset($_COOKIE['user_id'])){
    $_SESSION['user_id'] = $_COOKIE['user_id'];



$user_id = $_SESSION['user_id'];

$query = "select * from user where user_id='$user_id'";
$result = mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result)) {
 $name = $row['fname'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Prize</title>

    <style>
        .buts a{
    background-color: rgb(0, 0, 0);
 padding: 20px 80px;
 text-decoration: none;
 color: blanchedalmond;
}
    </style>
</head>
<body>
    <script>
         
window.addEventListener('load',function(){
    swal({
        title:"Congratulations!",
        text:"you've won a prize!",
        icon: "success",
        });
});
</script>

<div class="container-fluid">

<div class="row">
    <div class="col-md-12">
        <img src="webimage/baloons.png" alt="" style="max-width:100%;">
    </div>
</div>

<br><br>
    <div class="row">
        <div class="col-md-12" style="text-align:center;">
            <h1>Congratulations <?php echo $name?>!</h1>
        </div>
    </div>

<br><br>
<br><br>
<div class="row">
    <div class="col-md-12" style="text-align:center;">
        <h4 style=""><?php echo $name ?>, you've won a instant cash of Rs upto 500 on your first Booking Confirmation </h4>
 <br>
        <h6>Confirmation number is: usr323<?php echo $user_id ?></h6>
    </div>
</div>

<div class="row">
    <div class="col-md-12 buts"  style= "text-align:center;" >
        <br><br>
        <a href="<?php echo $des ?>">Continue</a>
    </div>
    
</div>
<br><br>
</div>



</body>
</html>







































<?php
}
}else{
    echo'no id ';
}



?>

