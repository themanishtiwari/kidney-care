<?php 
    $page = basename($_SERVER['PHP_SELF']);
?>

<body class="bg-img-fixed pt-sm-0" data-bg-img="">

    <!-- <div id="wrapper"> -->

    <!-- Header Section Start from here  -->
    <header id="header" class="header">
        <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0" style="background-color: #000 !important;">
            <div class="container">

                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4 mr-0">

                        <a href="tel:+91 8081222333" class="btn text-black p-5 m-5"
                            style=" background-color: white; border-radius:15px; font-weight: bold;"><i
                                class="fa fa-phone"></i>+91 8081222333</a>
                        <a class="btn btn-colored btn-flat btn-theme-colored pb-10" href="get-consultation.php">Get
                            Consultation</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container">
                    <nav id="menuzord-right" class="menuzord default">
                        <a class="menuzord-brand" href="index.php">
                            <img src="static/images/bk-kidney-care.webp" alt="B.K Kidney Care" title="BK Kidney Care">
                        </a>
                        <ul class="menuzord-menu">
                            <li <a href="index.php" <?php if($page=='index.php' ){ echo 'class="active"' ;}?>><a
                                    href="index.php">Home</a></li>
                            <li <a href="about.php" <?php if($page=='about.php' ){ echo 'class="active"' ;}?>><a
                                    href="about.php">About</a></li>
                            <li <a href="patient-reviews.php" <?php if($page=='patient-reviews.php' ){ echo 'class="active"' ;}?>><a
                                    href="patient-reviews.php">Patient Reviews</a></li>
                            <li <a href="our-experts.php" <?php if($page=='our-experts.php' ){ echo 'class="active"' ;}?>><a
                                    href="our-experts.php">Our Experts</a></li>
                                    <li <a href="gallery.php" <?php if($page=='gallery.php' ){ echo 'class="active"' ;}?>><a
                                    href="gallery.php">News & Media</a></li>
                                    <li <a href="career.php" <?php if($page=='career.php' ){ echo 'class="active"' ;}?>><a
                                    href="career.php">Career</a></li>
                            <li <a href="get-consultation.php" <?php if($page=='get-consultation.php' ){
                                echo 'class="active"' ;}?>><a href="get-consultation.php">Book Appointment</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Section End here  -->