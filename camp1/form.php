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
    <meta name="author" content="BK Arogyam" />

    <!-- Page Title -->


    <title>B.K Arogyam - Get Consultation
    </title>
    <link href="static/images/favicon.png" rel="shortcut icon" type="image/png">
    <meta name="title"
        content="Kidney Failure Treatment By Ayurveda In India | Best Ayurvedic Medicine for chronic disease treatment|" />
    <meta name="description"
        content="BK Arogyam &amp; Research center is India&#x27;s First Ayurvedic Hospital in Varanasi, Delhi, Lucknow,India . we provide best ayurvedic medicine for kidney failure treatment, Kidney Failure Treatment By Ayurveda Diabetes, kidney stone by our Ayurveda expert Dr. BK Chaurasia." />
        <meta name="keywords"
        content="stop kidney dialysis, Chronic Kidney Disease Treatment In Ayurveda, Kidney failure Treatment In Ayurveda, Kidney Problem , Chronic Kidney Disease Treatments In India, Kidney Failure Ayurvedic Treatment, Ayurvedic Medicines For Kidney Failure, Ayurvedic Kidney Disease Treatment India, Kidney Failure Treatment In Ayurveda, Kidney Treatment In Ayurveda, Ayurvedic Treatment For Kidney Failure, Ayurvedic Medicine For Kidney Problem, Kidney Treatment In India, bk arogyam, bk arogyam varanasi, bk arogyam & research pvt ltd, how to stop dialysis" />



    <link href="static/css/css-plugin-collections.css" rel="stylesheet" />

    <link href="static/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="static/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="static/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="static/css/responsive.css" rel="stylesheet" type="text/css">



    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="static/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="static/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>


</head>

<body class="bg-img-fixed pt-sm-0" data-bg-img="">
        <!-- Header Section Start here  -->

<div class="container-fluid px-0">
  <nav class="navbar navbar-header  navbar-dark bg-dark">
    <a href="bk-admin-panel.php"><img src="static/images/bk-kidney-care-white.webp" height="30" class="d-inline-block align-top" alt="bk kidney care"></a>
    <a href="../bk-admin-panel.php"><button class="btn btn-warning my-2 my-sm-0">Back</button></a>
</nav>
    </div>
<br>
<br>

    <!-- Header Section End here  -->

    <!--  Form and Address section   -->
    <section class="arogyam-row">
<div class="container">
        <div class="row spacer">
            <div class="col-md-10  my-30">
                <form style="height: auto; border-radius: 15px !important; background-color: azure; " id="contact_form"
                    name="contact_form" class=" border-theme-1px p-30 m-10" method="POST"
                    onsubmit="return validateForm()" action="camp-submit.php">
                    <h2 style="text-align: left;">Get<span class="highlight"> Consultation</span></h2>
                    <p>Fill the form, our Expert call you soon</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" id="name">
                                <label for="form_name">Name</label>
                                <input id="form_name" name="name" class="form-control" type="text"
                                    placeholder="Enter Name"><span id="name" class="formerror"
                                    style="color: red"> </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" id="disease">
                                <label for="form_name">Disease <small>*</small></label>
                                <select id="form_subject" name="disease" class="form-control" type="text">
                                    <option value="" selected disabled>Select disease</option>
                                    <option value="Kidney">Kidney Problem</option>
                                    <option value="Heart">Heart Problem</option>
                                    <option value="Diabetes">Diabetes Problem</option>
                                    <option value="Anorectal">Anorectal Problem</option>
                                    <option value="Neuro">Neuro Problem</option>
                                    <option value="Other">Other Problem</option>
                                </select>
                                <span id="name" class="formerror" style="color: red"> </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="form-group" id="disease">
                                <label for="form_name">Source<small>*</small></label>
                                <select id="form_subject" name="source" class="form-control" type="text">
                                    <option value="" selected disabled>Select Source</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Phone Call">Phone call</option>
                                    <option value="Quora">Quora</option>
                                    <option value="instagram">instagram</option>
                                    <option value="Campion">Campion</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span id="name" class="formerror" style="color: red"> </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" id="phone">
                                <label for="form_phone">Phone<small>*</small></label>
                                <input id="form_phone" name="phone" class="form-control" type="text"
                                    placeholder="Enter Phone" required><span id="phone" class="formerror"
                                    style="color: red"> </span></b>
                            </div>
                        </div>
                    </div>
                    <div class="form-row ">
        <div class="form-group col-md-4">
          <label>Address</label>
          <input type="text" class="form-control" name="address" >
        </div>
      <div class="form-group col-md-2">
        <label>Category</label>
        <select name="category" class="form-control" type="text" required>
            <option value="" selected disabled>Select</option>
            <option value="Hot">Hot</option>
            <option value="Warm">Warm</option>
            <option value="Cold">Cold</option>
            <option value="Closed">Closed</option>
        </select>
        </div> 
        <div class="form-group col-md-6">
          <label>Other</label>
          <input type="text" class="form-control" name="other" >
        </div>
      </div>
      <div class="form-row ">
        <div class="form-group col-md-12">
          <label>Remark</label>
          <input type="text" class="form-control" name="remark1" required>
          <!-- <textarea contact_list id="form_message" class="form-control required" name="remark1" rows="3" value="" ></textarea> -->
        </div>
      </div>

                    <div class="form-group" id="message">
                        <label for="form_name">Message</label>
                        <textarea id="form_message" name="message" class="form-control required" rows="3"
                            placeholder="Enter Message"></textarea><span id="message" class="formerror"
                            style="color: red"> </span>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" value="Submit"
                            class="btn btn-dark btn-theme-colored btn-flat mr-5">Submit</button>
                    </div>
                </form>
                <script src="form-validation.js"></script>
            </div>

        </div>
        </div>
    </section>


</body>

<!-- Mirrored from bkkidneycare.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 05:10:43 GMT -->

</html>
<?php
}
?>