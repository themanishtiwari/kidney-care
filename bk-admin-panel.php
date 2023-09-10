<?php
  session_start();
  if (!isset($_SESSION['sr'])) {
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
            <a href="logout.php"><button class="btn btn-warning my-2 my-sm-0">Logout</button></a>

            </a>
        </nav>
        <br>

        <!-- <section class="mt-30">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <a href="free-consultation-data.php" style="text-decoration:none;"><button
                            style="font-size: 20px; text-decoration: none;"
                            class="btn btn-dark btn-lg btn-block mt-15 ">Free Consultation form</button></a><br>
                    <a href="free-consultation-category.php" style="text-decoration:none;"><button
                            style="font-size: 20px;" type="button"
                            class="btn btn-warning text-black btn-lg btn-block mt-15">Data with Category
                            Filter</button></a><br>
                    <a href="form.php" style="text-decoration:none;"><button style="font-size: 20px;" type="button"
                            class="btn btn-dark btn-lg btn-block mt-15">Camp Submit form</button><br>
                        <a href="camp-data.php" style="text-decoration:none;"><button style="font-size: 20px;"
                                type="button" class="btn btn-warning text-black btn-lg btn-block mt-15">Camp
                                Data</button><br>
                            <a href="job-data.php" style="text-decoration:none;"><button style="font-size: 20px;"
                                    type="button" class="btn btn-dark btn-lg btn-block mt-15">Job Applied Candidate
                                    Data</button></a>
                            <br><button style="font-size: 20px;" type="button"
                                class="btn btn-warning text-black btn-lg btn-block mt-15">Patient Data With
                                Report</button> <br>
                            <a href="admin-special-login.php" style="text-decoration:none;"><button
                                    style="font-size: 20px;" type="button"
                                    class="btn btn-dark btn-lg btn-block mt-15">Special Login Panel</button></a>
                </div>
                <div class="col-md-3"></div>

            </div> -->

    <!-- Card Section Start  -->

<div class="container-xxl py-5">
    <div class="container-fluid">
        <div class="row g-4 " id="box" >
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="free-consultation-data.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/free_consultation_form.png" alt="free_consultation_form" title="Free Consultation Form">
                    <h3 class="text-center">Free Consultation</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
            <a href="get-consultation-data-with-report.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/pateint_report.png" alt="pateint-data" title="Pateint Data With Report">
                    <h3 class="text-center">Pateint Data With Report</h3>
                </div></a>
                
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="form.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/camp_submit_form.png" alt="camp_submit_form" title="Camp Submit Form">
                    <h3 class="text-center">Camp Form</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="camp-data.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/camp_data.png" alt="camp_data" title="Camp Data">
                    <h3 class="text-center">Camp Data</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="/camp1/form.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/camp_submit_form.png" alt="camp_submit_form" title="Camp Submit Form 1">
                    <h3 class="text-center">Camp Form 1</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="/camp1/camp-data.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/camp_data.png" alt="camp_data" title="Camp Data 1">
                    <h3 class="text-center">Camp Data 1</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
                <a href="job-data.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/job_applied_data.png" alt="Candidate_data" title="Job Applied Candidate Data">
                    <h3 class="text-center">Job Applied Candidate Data</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
            <a href="patient-form.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/patient.png" alt="filter_campaign_data" title="Data with Category Filter">
                    <h3 class="text-center">Patient Form</h3>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp my-2" data-wow-delay="0.1s">
            <a href="admin-special-login.php"><div class="boxes">
                    <img src="./static/images/admin_panel_icon/special_login_panel.png" alt="special-login-panel" title="Special Login Panel">
                    <h3 class="text-center">Special Login Panel</h3>
                </div></a>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-item-center" >
            <div class="text-center wow fadeInUp my-2" data-wow-delay="0.1s">
            
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