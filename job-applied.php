<?php
   include'dbcon.php';

   if (isset($_POST["submit"])) {
           $name=$_POST["name"];
           $phone=$_POST["phone"];
           $address=$_POST["address"];
           $qualification=$_POST["qualification"];
           $post=$_POST["post"];
        
           if (!preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$address)&& !preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$qualification)&& preg_match("/^[0-9 ]+$/",$phone)&& preg_match("/^[A-Za-z ]+$/",$name)) {
          // $insert="INSERT INTO `job`(`name`, `phone`, `address`, `qualification`, `post`) VALUES ('$name','$phone','$address','$qualification','$post')";

        $sql=mysqli_query($conn,"INSERT INTO `job`(`name`, `phone`, `address`, `qualification`, `post`) VALUES ('$name','$phone','$address','$qualification','$post')");

        
    if ($sql) {  ?>
    <!DOCTYPE html>
        <html dir="ltr" lang="en">
        <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="BK Arogyam" />
        <!-- Stylesheet -->
     <link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="static/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="static/css/animate.css" rel="stylesheet" type="text/css">
    <link href="static/css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | Theme Color -->
    <link href="static/css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">
    <!-- CSS | Main style file -->
    <link href="static/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="static/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="static/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="static/css/responsive.css" rel="stylesheet" type="text/css">
    </head>
<body>
<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                <img style="height:3rem;" src="static/images/checked.png" class="menuzord-brand m-0" alt=""><h2 class="text-uppercase mt-0 mb-10">  <span class="text-theme-colored">Form</span> Submitted</h2>
                    <!-- <h4 class="text-gray-dimgray font-weight-400"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</em></h4>  -->
                    <p>
                        <b>Your form submmited successfully, our expert call you soon</b>
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="row mb-10">
                        <div class="col-sm-6 col-md-12 pr-5 pr-sm-15 mb-sm-10">
                            <img class="img-fullwidth"
                                src="static/images/doctor/doctor_call_you.jpeg"
                                alt="">
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>        

</body>
</html>
   <?php 
   header("refresh:5; url=index.php");
   }
   else{
        echo '<h1 style="color: red; text-align: center; margin: 300px;">Registration Failed</h1>';
        header("refresh:1;url=career.php");
   }
}
else{
 echo '<h1 style="color: red; text-align: center; margin: 300px;">Invalid input, Form not submitted</h1>';
 header("refresh:3;url=career.php");
}
 }
?>