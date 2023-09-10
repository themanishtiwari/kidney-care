<?php
  session_start();
  if (!isset($_SESSION['sr'])) {
      header('location: index.html');
    }
    else{
          ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
  <link href="static/images/favicon.png" rel="shortcut icon" type="image/png">
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"  rel="stylesheet"/>
	<style type="text/css">
		.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
	</style>
</head>
<body>
  
	<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
<center>
                <div class="text-center">
                  <img src="static/images/bk-kidney-care.webp"
                    style="width: 285px;" alt="logo">
                                  </div>
                                  <br><br>
</center>
                <form method="POST">

                  <div class="form-outline mb-4">
                    <b>Password</b><br>
                    <input style="background-color: yellow;" type="password" id="form2Example22" class="form-control" name="pin" placeholder="Password" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit" >Log in</button>
                 
                  </div>
                </form>
                <?php

include'dbcon.php';

 if(isset($_POST['submit'])){
    $pass=$_POST['pin'];
    $password="j1#56a".$pass."j1#56a";

    $sql=mysqli_query($conn,"SELECT * from admin WHERE pin='$password'");

 $rw=mysqli_num_rows($sql); 
if($rw){
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['id']=$row["id"];
        header('location: special-admin-panel.php');
      
 }
 else{
    echo '<br><red style="color:red;  font-size:20px;">Incorrect Password</red>';
 }
}
?>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Welcome to BK Kidney Care</h4>
                <p class="small mb-0">BK Arogyam is India’s best kidney hospital, it's providing the best kidney treatment with the help of ayurvedic medicine, Therapy and Yoga without Dialysis and Kidney Transplant. BK Arogyam has been giving treatment to kidney patient for many years at low cost compare to dialysis and kidney transplant, lakhs of patients have recovered from here and gone to their homes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
<?php   }  ?>