

<?php

if (isset($_POST['submit'])) {
    $area = $_POST['area'];
    $gender = $_POST['gender'];
  
   // $_SESSION['area'] = $area;
    $_SESSION['gender'] = $gender;


    header("location: jacki?value=$area &gender=$gender ");
  }



  //    header("location: jacki?value=$area");
?>