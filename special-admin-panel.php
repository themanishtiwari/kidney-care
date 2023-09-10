<?php
  session_start();
  if (!isset($_SESSION['id'])) {
      header('location: admin-login.php');
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
    <link rel="stylesheet" href="static/css/bootstrap.min-4.1.3.css">
    <link href="static/images/favicon.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="static/css/style-main.css">

    <style>
        .boxes {
            background: linear-gradient(#ffffff,#ffffc4);
            background: linear-gradient();
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-header  navbar-dark bg-dark">
            <img src="static/images/bk-kidney-care-white.webp" height="30" class="d-inline-block align-top"
                alt="bk kidney care">
            <a href="bk-admin-panel.php"><button class="btn btn-warning my-2 my-sm-0">Back</button></a>

            </a>
        </nav>
        <br>

    <!-- Card Section Start  -->

<div class="container-xxl py-5">
    <div class="container-fluid">
        <div class="row g-4 " id="box" >
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="free-consultation-data-delete.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/free_consultation_form.png" alt="free_consultation_form" title="Free Consultation Form">
                    <h3 class="text-center">Free Consultation</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="doctors-approval.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/doctor.png" alt="filter_campaign_data" title="Data with Category Filter">
                    <h3 class="text-center">Doctor Page</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
            <a href="camp-data-delete.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/camp_data.png" alt="camp_data" title="Camp Data">
                    <h3 class="text-center">Camp Data</h3></div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
            <a href="job-data-delete.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/job_applied_data.png" alt="Candidate_data" title="Job Applied Candidate Data">
                    <h3 class="text-center">Job Applied Candidate Data</h3>
                </div></a>
            </div>
            
        </div>
        <div class="row d-flex justify-content-center align-item-center" >
            <div class="text-center wow fadeInUp my-2" data-wow-delay="0.1s">
            <a href="social-media-data.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/special_login_panel.png" alt="special-login-panel" title="Special Login Panel">
                    <h3 class="text-center">Social Media Data</h3>
                </div></a>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

     <!-- Experiment Container End  -->

</body>

</html>
<?php
}
?>