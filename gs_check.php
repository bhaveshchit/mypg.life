<?php
session_start();
include("db/connectvars.php");
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$g_id=mysqli_real_escape_string($con,$_POST['g_id']);
$image=mysqli_real_escape_string($con,$_POST['image']);

$_SESSION['g_id']=$g_id;
        

$res=mysqli_query($con,"select * from user where g_id='$g_id'");
$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        $_SESSION['NAME']=$row['name'];
        
if($check>0){

}else{
        mysqli_query($con,"insert into user(name,email,image,g_id) values('$name','$email','$image','$g_id')");
        $_SESSION['NAME']=$name;
}

echo "done";
?>