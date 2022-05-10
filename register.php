
<?php

include_once('db/connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if (isset($_POST['submit'])) {
        // Grab the profile data from the POST
        $fname = mysqli_real_escape_string($dbc, trim($_POST['fname']));
       // $lname = mysqli_real_escape_string($dbc, trim($_POST['lname']));
        $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
        $age = mysqli_real_escape_string($dbc, trim($_POST['age']));
       // $from = mysqli_real_escape_string($dbc, trim($_POST['from']));
        $gender = mysqli_real_escape_string($dbc, trim($_POST['gender']));
        $phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));
      //  $alterphone = mysqli_real_escape_string($dbc, trim($_POST['alterphone']));
        $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
      



        $query = "SELECT * FROM user where gmail = '$email' ";
        $data = mysqli_query($dbc , $query);
        if(mysqli_num_rows($data) == 0){
//the given username is unique so insert the values into database
$query = "INSERT INTO user (fname,gender,gmail,phone,age,password) VALUES ('$fname','$gender','$email','$phone','$age',SHA('$password'))";
mysqli_query($dbc, $query);

header('location:login.php');
mysqli_close($dbc);
exit();


        }else{
            //an account already exist with the same username

            echo  "<h1> gmail is already exist </h1>";
        }

       

       
                }
            

  




               
?>