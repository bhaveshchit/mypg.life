<?php

require_once("header/headers.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>signup</title>

<style>



@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap');


body {
    font-family: 'Roboto', sans-serif;
}

.login-box {
    margin-top: 75px;
    height: auto;
    background: #1a222600;
    text-align: center;
  
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#111312, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: left;
    font-size: 30px;
    letter-spacing: 2px;
 padding: 20px;
    font-weight: bold;
    color: #252527ad;
    font-family: 'Noto Sans', sans-serif;
}

.login-form {
    margin-top: 25px;
    text-align: center;
}

input[type=text] {
    background-color: #36657c00;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #000000;
    font-family: 'Noto Sans', sans-serif;
}

input[type=password] {
    background-color: #d4d7d800;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #000000;
    
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    background-color: #00000000;
    color: #000000;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 20px;
    color: #000000b9;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}

</style>



</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                  Signup
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="POST" action="register.php">
                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input type="text" name="fname" class="form-control" required>
                            </div>
                           

                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                         
                            <div class="form-group">
                                <label class="form-control-label">Age</label>
                                <input type="text" name="age" class="form-control" required>
                            </div>

                           




<div class="form-group">
                          
   
                            <label class="form-control-label">Gender</label>
      <select name="gender">
          <option selected> Select Box </option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        
      </select>

  </label>


</div>

                           

                            <div class="form-group">
                                <label class="form-control-label">Date Of Birth</label>
                                <input type="password" name="password" class="form-control" required placeholder="dd/mm/yyyy" >
                            </div>
                            

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit"  name="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                               
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>





</body>
</html>

