<?php

include('header/headers.php');
include_once('db/connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>


  h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}


.sec-title-style1 {
    position: relative;
    display: block;
    margin-top: -9px;
    padding-bottom: 50px;
}
.sec-title-style1.max-width{
    position: relative;
    display: block;
    max-width: 770px;
    margin: -9px auto 0;
    padding-bottom: 52px;    
}
.sec-title-style1.pabottom50 {
    padding-bottom: 42px;
}


.sec-title-style1 .title {
    position: relative;
    display: block;
    color: #131313;
    font-size: 36px;
    line-height: 46px;
    font-weight: 700;
    text-transform: uppercase;
}
.sec-title-style1 .title.clr-white{
    color: #ffffff;
}
.sec-title-style1 .decor {
    position: relative;
    display: block;
    width: 70px;
    height: 5px;
    margin: 19px 0 0;
}
.sec-title-style1 .decor:before{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .decor:after{
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .decor span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #FFA500;
    margin: 2px 0;
}


.sec-title-style1 .text{
    position: relative;
    display: block;
    margin: 7px 0 0;
}
.sec-title-style1 .text p{
    position: relative;
    display: inline-block;
    padding: 0 15px;
    color: #131313;
    font-size: 14px;
    line-height: 16px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
}
.sec-title-style1 .text.clr-yellow p{
    color: #FFA500;
}
.sec-title-style1 .text .decor-left{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-left span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #FFA500;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-left:before{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-left:after{
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}

.sec-title-style1 .text .decor-right{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-right span {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #FFA500;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-right:before{
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-right:after{
    position: absolute;
    top: 0;
    left: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #FFA500;
    border-radius: 50%;
    content: "";
}

.sec-title-style1 .bottom-text{
    position: relative;
    display: block;
    padding-top: 16px;
}
.sec-title-style1 .bottom-text p{
    color: #848484;
    font-size: 16px;
    line-height: 26px;
    font-weight: 400;
    margin: 0;
}
.sec-title-style1 .bottom-text.clr-gray p{
    color: #cdcdcd;    
}
.contact-address-area{
    position: relative;
    display: block;
    background: #ffffff;
    padding: 100px 0 120px;
}
.contact-address-area .sec-title-style1.max-width {
    padding-bottom: 72px;
}
.contact-address-box{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;    
}
.single-contact-address-box {
    position: relative;
    display: block;
    background: #131313;
    padding: 85px 30px 77px;
}
.single-contact-address-box .icon-holder{
    position: relative;
    display: block;
    padding-bottom: 24px;
}
.single-contact-address-box .icon-holder span:before{
    font-size: 75px;
}
.single-contact-address-box h3{
    color: #ffffff;
    margin: 0px 0 9px;
}
.single-contact-address-box h2{
    color: #FFA500;
    font-size: 24px;
    font-weight: 600;
    margin: 0 0 19px;
}
.single-contact-address-box a{
    color: #ffffff;
}

.single-contact-address-box.main-branch {
    background: #FFA500;
    padding: 53px 30px 51px;
    margin-top: -20px;
    margin-bottom: -20px;
}
.single-contact-address-box.main-branch h3{
    color: #131313;
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 38px;
    text-transform: uppercase;
    text-align: center;
}
.single-contact-address-box.main-branch .inner{
    position: relative;
    display: block;
    
}
.single-contact-address-box.main-branch .inner ul{
    position: relative;
    display: block;
    overflow: hidden;
}
.single-contact-address-box.main-branch .inner ul li{
    position: relative;
    display: block;
    padding-left: 110px;
    border-bottom: 1px solid #737373;
    padding-bottom: 23px;
    margin-bottom: 24px;
}
.single-contact-address-box.main-branch .inner ul li:last-child{
    border: none;
    margin-bottom: 0;
    padding-bottom: 0;
}
.single-contact-address-box.main-branch .inner ul li .title{
    position: absolute;
    top: 2px;
    left: 0;
    display: inline-block;
}
.single-contact-address-box.main-branch .inner ul li .title h4{
    color: #131313;
    font-size: 18px;
    font-weight: 600;
    line-height: 24px;
    text-transform: capitalize;
    border-bottom: 2px solid #a5821e;
}

.single-contact-address-box.main-branch .inner ul li .text{
    position: relative;
    display: block;
}
.single-contact-address-box.main-branch .inner ul li .text p{
    color: #131313;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    margin: 0;
}

.contact-info-area {
    position: relative;
    display: block;
    background: #ffffff;
}
.contact-form {
    position: relative;
    display: block;
    background: #ffffff;
    padding: 100px 60px 80px;
    -webkit-box-shadow: 0px 3px 8px 2px #ededed; 
    box-shadow: 0px 3px 8px 2px #ededed;
    z-index: 3;
}
.contact-form .sec-title-style1{
    position: relative;
    display: block;
    padding-bottom: 51px;
    width: 50%;
}
.contact-form .text-box{
    position: relative;
    display: block;
    margin-top: 19px;
    width: 50%;    
}
.contact-form .text p{
    color: #848484;
    line-height: 26px;
    margin: 0;
}

.contact-form .inner-box{
    position: relative;
    display: block;
    background: #ffffff;
}
.contact-form form{
    position: relative;
    display: block;
}
.contact-form form .input-box{
    position: relative;
    display: block;
}

.contact-form form input[type="text"],
.contact-form form input[type="email"],
.contact-form form textarea{
    position: relative;
    display: block;   
    background: #ffffff;
    border: 1px solid #eeeeee;
    width: 100%;
    height: 55px;
    font-size: 16px;
    padding-left: 19px;
    padding-right: 15px;
    border-radius: 0px;
    margin-bottom: 20px;
    transition: all 500ms ease;
}
.contact-form form textarea {
    height: 130px;
    padding-left: 19px;
    padding-right: 15px;
    padding-top: 14px;
    padding-bottom: 15px;
}
.contact-form form input[type="text"]:focus{
    color: #222222;
    border-color: #d4d4d4; 
}
.contact-form form input[type="email"]:focus{
    color: #222222;
    border-color: #d4d4d4;
}
.contact-form form textarea:focus{
    color: #222222;
    border-color: #d4d4d4;
}
.contact-form form input[type="text"]::-webkit-input-placeholder {
    color: #848484;
}
.contact-form form input[type="text"]:-moz-placeholder {
    color: #848484;
}
.contact-form form input[type="text"]::-moz-placeholder {
    color: #848484;
}
.contact-form form input[type="text"]:-ms-input-placeholder {
    color: #848484;
}
.contact-form form input[type="email"]::-webkit-input-placeholder {
    color: #848484;
}
.contact-form form input[type="email"]:-moz-placeholder {
    color: #848484;
}
.contact-form form input[type="email"]::-moz-placeholder {
    color: #848484;
}
.contact-form form input[type="email"]:-ms-input-placeholder {
    color: #848484;
}
.contact-form form button {
    position: relative;
    display: block;
    width: 100%;
    background: #FFA500;
    border: 1px solid #FFA500;
    color: #131313;
    font-size: 16px;
    line-height: 55px;
    font-weight: 600;
    text-align: center;
    text-transform: capitalize;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    cursor: pointer;
}

.contact-form form button:hover{
    color: #ffffff;
    background: #131313;
}
</style>


</head>
<body>
    


<!--End Contact Address Area-->  
 
<!--Start contact form area-->
<br><br><br>
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="sec-title-style1 float-left">
                                <div class="title">Send Your Message</div>
                                <div class="text"><div class="decor-left"><span></span></div><p>Contact Form</p></div>
                            </div>
                            <div class="text-box float-right">
                            </div>
                        </div> 
                    </div>   
                    <div class="inner-box">
                        <form id="contact-form"  name="contact_form" class="default-form" action="contact.php" method="post">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">   
                                                <input type="text" name="name" value="" placeholder="Name" required="">
                                            </div> 
                                             <div class="input-box"> 
                                                <input type="text" name="phone" value="" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box"> 
                                                <input type="email" name="email" value="" placeholder="Email" required="">
                                            </div>
                                        </div>  
                                    </div> 
                                    <div class="row">
                                         <div class="col-xl-12">
                                            <div class="input-box"> 
                                                <input type="text" name="subject" value="" placeholder="Subject">
                                            </div>     
                                        </div> 
                                    </div>   
                                </div>
                                <div class="col-xl-6 col-lg-12">
                                    <div class="input-box">    
                                        <textarea name="message" placeholder="Your Message..." required=""></textarea>
                                    </div>
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit" name="submit" data-loading-text="Please wait...">Send Message<span class="flaticon-next"></span></button>    
                                    </div>         
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



<br><br><br>

<footer class="text-center text-lg-start text-muted" style="background:#fff url('webimage/1.jpg') no-repeat ; ">
    <div class="foot">
  <!-- Section: Social media -->
<br>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class=" mb-4">
            <span style="font-family: 'Abril Fatface', cursive;">mypg.</span><span style="color:red; font-family: 'Pacifico', cursive;">life</span>
          </h6>
          <p>
            find your desired room in just few minutes without any hassle.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Room finding</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Security</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Facilities</a>
          </p>
        
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> plot 73 pashupatinathnagar , jaipur</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contact@mypg.life
          </p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            lifemypg@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 8824991267</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
</div>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="mypg.life">mypg.life</a>
  </div>
  
  <!-- Copyright -->
</footer>
<!-- Footer -->


</body>
</html>



<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$phone = $_POST['phone'];



$query = "INSERT INTO contact (name,subject,email,phone,message) VALUES ('$name','$subject','$email','$phone','$message')";
mysqli_query($dbc, $query);
echo'<script>alert("thanks for letting us know!😁");</script>';

}









?>

