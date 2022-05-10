<?php




include_once('db/connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


session_start();



    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($dbc,trim($_POST['email']));
        $password = mysqli_real_escape_string($dbc,trim($_POST['password']));


        if(!empty($email) && !empty($password)){

            //look up the username and password in the database
            $q = "SELECT user_id from user where gmail = '$email' and password =  SHA('$password') ";
            $data = mysqli_query($dbc , $q);

            if(mysqli_num_rows($data) == 1){
              $row = mysqli_fetch_array($data);  
              $_SESSION['user_id'] = $row['user_id'];
              setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30 * 30));    // expires in 30 days
              header('location:prize.php');

            }else{
                echo 'check your mail address or the password twice';
            }
        }else{
            echo ' <h1>please enter all the details</h1> ';
        }

      



    }






?>