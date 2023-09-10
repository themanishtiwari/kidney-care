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
    <meta name="author" content="BK Arogyam" />

    <!-- Page Title -->


    <!-- <title>Kidney Failure Treatment By Ayurveda In India | Best Ayurvedic Medicine for chronic disease treatment|
    </title> -->
    <title>BK Arogyam - Best Kidney Failure Treatment By Ayurveda In India</title>
    <meta name="title"
        content="Kidney Failure Treatment By Ayurveda In India | Best Ayurvedic Medicine for chronic disease treatment|" />
    <meta name="description"
        content="BK Arogyam &amp; Research center is India&#x27;s First Ayurvedic Hospital in Varanasi, Delhi, Lucknow,India . we provide best ayurvedic medicine for kidney failure treatment, Kidney Failure Treatment By Ayurveda Diabetes, kidney stone by our Ayurveda expert Dr. BK Chaurasia." />
    <meta name="keywords"
        content="stop kidney dialysis, Chronic Kidney Disease Treatment In Ayurveda, Kidney failure Treatment In Ayurveda, Kidney Problem , Chronic Kidney Disease Treatments In India, Kidney Failure Ayurvedic Treatment, Ayurvedic Medicines For Kidney Failure, Ayurvedic Kidney Disease Treatment India, Kidney Failure Treatment In Ayurveda, Kidney Treatment In Ayurveda, Ayurvedic Treatment For Kidney Failure, Ayurvedic Medicine For Kidney Problem, Kidney Treatment In India, bk arogyam, bk arogyam varanasi, bk arogyam & research pvt ltd, how to stop dialysis" />


    <!-- Favicon and Touch Icons -->
    <link href="static/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="static/images/favicon.png" rel="apple-touch-icon">
    <link href="static/images/favicon.png" rel="apple-touch-icon" sizes="72x72">
    <link href="static/images/favicon.png" rel="apple-touch-icon" sizes="114x114">
    <link href="static/images/favicon.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="static/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="static/css/animate.css" rel="stylesheet" type="text/css">
    <link href="static/css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="static/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />

    <!-- CSS | Preloader Styles -->
    <link href="static/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="static/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="static/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="/static/css/style.css" rel="stylesheet" type="text/css"> -->
    <link href="static/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- Revolution Slider 5.x CSS settings -->
    <link href="static/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="static/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="static/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- Doctpr CSS  -->
    <link rel="stylesheet" href="static/css/doctor_page.css">

    <!-- CSS | Theme Color -->
    <link href="static/css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">

    <!-- Footer Scripts -->
    <!-- external javascripts -->
    <script src="static/js/jquery-2.2.4.min.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="static/js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="static/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="static/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154009877-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-154009877-1');
    </script>

    <style>
        a.menuzord-brand {}

        @media screen and (max-width: 700px) {
            a.menuzord-brand {
                margin-left: 20px;
                height: auto;
                width: 220px;
            }
        }

        .badge-box img {
            border: 8px solid #f3f3f3;;
        }

        .experience-text {
            background-color: #7E2627 !important;
            margin-top: 2em;
            padding: 8px;
            color: #fff;
            position: relative;
           
            margin-bottom: 3em;
            
            border-radius: 0 0 5% 5% ;
        }
        .btn-group{
            
            margin: 0 auto 2em auto;

        }

    </style>

    <!-- Custome  -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="static/fonts/flaticons/Heebo-VariableFont_wght.ttf" rel="stylesheet">

</head>

<?php include 'header.php';?>
<a href="special-admin-panel.php"><button class="btn btn-warning my-2 my-sm-0">Back</button></a>


<!-- Card Section Start From Here  -->

<h2 class="text-uppercase"> <span style="border-bottom: 2px solid #7E2627;">Our </span><span
        class="text-theme-colored"><b>Doctors </b></span>
</h2>

<div class="container-xxl py-5" style="margin-top: 8em;">
    <div class="container">
        <div class="row g-3 card-container" style="margin-left: 0px;">
        <?php 
         include 'dbcon.php';
         $table= "SELECT * FROM  doctor  ORDER BY sr DESC";
         $result =mysqli_query($conn,$table);
         
           while ($row= mysqli_fetch_array($result)) { 
        ?>
        <div class="col-lg-4 col-sm-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card card-01" style="padding-bottom: 0%;">
                    <div class="card-body text-center">
                        <span class="badge-box"><img class="card-img-top rounded-circle" src="<?php echo $row['image'] ?>" alt="Card image cap" ></span>
                        <h4 class="card-title"><?php echo $row['name'] ?></h4>
                        <p class="card-text"><?php echo $row['expertise'] ?> <br> <?php echo $row['qualification'] ?></p>
                        <p class="card-text"><span class="doctorid">Doctor ID: </span>BK<?php echo $row['doctorid'] ?></p>
                        <h5 class="experience-text"><?php echo $row['experience'] ?> Years of Experience</h5>
                        <div class="row btn-group">
                        <form method="POST">
                            <?php if ($row['approval']=='yes') {   ?>
                        <button type="submit" name="no" value="<?php echo $row['sr'] ?>" class="btn btn-default text-uppercase">Disapprove</button>
                        <?php }
                        else{ ?>
                        <button type="submit" name="yes" value="<?php echo $row['sr'] ?>" class="btn btn-default text-uppercase">Approve</button>
                        <?php  }  ?></form>
                        <form method="post" action="doctor-edit.php"><button class="btn btn-default text-uppercase" type="submit" name="edit" value="<?php echo $row['sr'] ?>" >Edit</button></form>
                        <form method="POST">
                        <button type="submit" name="delete" value="<?php echo $row['sr'] ?>" class="btn btn-default text-uppercase" href="?action=delete" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
if (isset($_POST["yes"])) {
        $sr=$_POST["yes"];
        $update=mysqli_query($conn,"UPDATE `doctor` SET approval='yes' WHERE sr=$sr");
        if($update){
            //echo "Approved successfully";
            ?><meta http-equiv="refresh" content="0" /> <?php
        }
        else{
            echo"Not approve";
        }
        
}
else if (isset($_POST['no'])) {
        $sr=$_POST["no"];   
        $update=mysqli_query($conn,"UPDATE `doctor` SET approval='no' WHERE sr=$sr");
        if($update){
            //echo "successful discarded";
            ?><meta http-equiv="refresh" content="0" /> <?php
        }
        else{
            echo"discardation Failed";
        }
}
else if (isset($_POST['delete'])) {
    $sr=$_POST['delete'];
    if($sr){
        $sr=$_POST["delete"];
        $update = mysqli_query($conn,"DELETE FROM doctor WHERE sr=$sr");
        $filename=$row['image'];
        unlink($filename);
        if($update){
            //echo "successful discarded";
            ?><meta http-equiv="refresh" content="0" /><?php
        }
    }
    
    else{
        echo"discardation Failed";
    }
}


    }
?>
        </div>
    </div>
</div>

<!-- Card Section End  -->

<section>
    <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="red" style="background-color: #7E2726;">
        <div class="container pt-70 pb-40">
            <div class="row border-bottom-black">
                <div class="col-sm-6 col-md-4 mx-5" style="color: rgb(248, 248, 248);">
                    <div class="widget">
                        <img class="mt-10 mb-20" height="60" alt="bk kidney care logo"
                            src="static/images/bk-kidney-care-white.webp">

                        <p>Manduvadih Lahartara Road, Shivdaspur,Near Hori Lal Park, Varanasi pin 221103</p>
                        <ul class="list-border mt-5">
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white mr-5"></i> <a
                                    class="text-white" href="tel: 8081222333">+91 8081222333</a> </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white mr-5"></i> <a
                                    class="text-white"
                                    href="mailto:doctor@bkarogyam.com">doctor@bkarogyam.com</a>
                            </li>
                        </ul>

                        <ul class="social-icons icon-dark icon-theme-colored icon-circled icon-sm mt-15">
                            <li><a href="https://www.youtube.com/bkarogyam" target="_blank"><i
                                        class="fa fa-youtube text-white"></i></a></li>
                            <li><a href="https://www.facebook.com/bkarogyamandresearchcenter" target="_blank"><i
                                        class="fa fa-facebook text-white"></i></a></li>
                            <li><a href="https://www.instagram.com/bkarogyam/" target="_blank"><i
                                        class="fa fa-instagram text-white"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/bkarogyam" target="_blank"><i
                                        class="fa fa-linkedin text-white"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 mx-5">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Useful Section</h5>
                        <ul class="list angle-double-right list-border">
                            <li><a style="color: #cfcfcf;" href="career.html">Career</a></li>
                            <li><a style="color: #c5c5c5;" href="about.html">About Us</a></li>
                            <li><a style="color: #c5c5c5;" href="patient-videos.html">Patient Video</a></li>
                            <li><a style="color: #c5c5c5;" href="index.html#patient-report">Patient Report</a>
                            </li>
                            <li><a style="color: #c5c5c5;" href="contact.html">Conatct</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Quick Contact</h5>
                        <form class="quick-contact-form" id="footer_quick_contact_form contact_form"
                            name="contact_form" action="form-submitted.php" method="POST">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input id="form_name" name="name" class="form-control" type="text"
                                            placeholder="Enter Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select id="form_subject" name="disease" class="form-control"
                                            type="text" placeholder="Select Disease" required>

                                            <option value="Kidney">Kidney Problem</option>
                                            <option value="Heart">Heart Problem</option>
                                            <option value="Diabetes">Diabetes Problem</option>
                                            <option value="Anorectal">Anorectal Problem</option>
                                            <option value="Neuro">Neuro Problem</option>
                                            <option value="Other">Other Problem</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input id="form_phone" name="phone" class="form-control" type="number"
                                            placeholder="Enter Phone" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit"
                                    class="btn btn-default btn-transparent btn-xs btn-flat mt-0">Send your
                                    message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-333" style="background-color: #000 !important;">
            <div class="container pt-15 pb-10">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-0 sm-text-center">Copyright &copy;2021 Bk Arogyam &
                            Research Pvt. Ltd.
                            All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="contact.html">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="contact.html">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>

</html>

<?php } ?>
