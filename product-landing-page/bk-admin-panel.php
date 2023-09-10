<?php
  session_start();
  if (!isset($_SESSION['sr'])) {
      header('location: index.html');
    }
    else{
          ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />   

<title>Admin Panel</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<div class="container-fluid px-0">
  <nav class="navbar navbar-header  navbar-dark bg-dark">
    <img src="static/images/bk-kidney-care-white.png" height="30" class="d-inline-block align-top" alt="bk kidney care">
    <a href="logout.php"><button class="btn btn-warning my-2 my-sm-0">Logout</button></a>
   
  </a>
</nav>
<br>

 <section class="mt-30">
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
   <a href="free-consultation-data.php" style="text-decoration:none;"><button style="font-size: 20px; text-decoration: none;" class="btn btn-dark btn-lg btn-block mt-15 ">Free Consultation Lead</button></a><br>
   <a href="form.php" style="text-decoration:none;"><button style="font-size: 20px;" type="button" class="btn btn-warning btn-lg btn-block mt-15 ">Patient Details Submit Form</button>
<br>
<a href="user-data.php" style="text-decoration:none;"><button style="font-size: 20px;" type="button" class="btn btn-dark btn-lg btn-block mt-15">Data with User Filter</button></a>
    <!-- <br><button style="font-size: 20px;" type="button" class="btn btn-warning text-black btn-lg btn-block mt-15">Patient Data With Report</button> -->
    <br>
<a href="admin-special-login.php" style="text-decoration:none;"><button style="font-size: 20px;" type="button" class="btn btn-warning text-black btn-lg btn-block mt-15">Special Login Panel</button></a>
    </div>
    <div class="col-md-3"></div>

</div>
</section>
  </body>
</html>
<?php
}
?>