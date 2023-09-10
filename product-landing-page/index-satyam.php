<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arogyam KFT</title>
    <meta name="description" content=" ">
    <link rel="icon" href="" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154009877-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-154009877-1');
    </script>

    <style>
        .button {
            color: black;

            display: inline-block;
            width: 100%;
            text-align: center;
            border-radius: 2em;
            opacity: 0.6s;
            transition: 0.4s;
            font-size: 1.2em;
            background-color: #228B22;
            color: white;
        }

        .button:hover {
            text-decoration: none;
            opacity: 1;
            border: 1px solid #228B22;
            background-color: white;
            color: #228B22;

        }


        @-webkit-keyframes glowing {
            0% {
                background-color: #8b8f61;
                -webkit-box-shadow: 0 0 3px #8b8f61;
            }

            50% {
                background-color: #00FF00;
                -webkit-box-shadow: 0 0 40px #00FF00;
            }

            100% {
                background-color: #8b8f61;
                -webkit-box-shadow: 0 0 3px #8b8f61;
            }
        }

        @-moz-keyframes glowing {
            0% {
                background-color: #8b8f61;
                -moz-box-shadow: 0 0 3px #8b8f61;
            }

            50% {
                background-color: #00FF00;
                -moz-box-shadow: 0 0 40px #00FF00;
            }

            100% {
                background-color: #8b8f61;
                -moz-box-shadow: 0 0 3px #8b8f61;
            }
        }

        @-o-keyframes glowing {
            0% {
                background-color: #8b8f61;
                box-shadow: 0 0 3px #8b8f61;
            }

            50% {
                background-color: #00FF00;
                box-shadow: 0 0 40px #00FF00;
            }

            100% {
                background-color: #8b8f61;
                box-shadow: 0 0 3px #8b8f61;
            }
        }

        @keyframes glowing {
            0% {
                background-color: #8b8f61;
                box-shadow: 0 0 3px #8b8f61;
            }

            50% {
                background-color: #00FF00;
                box-shadow: 0 0 40px #00FF00;
            }

            100% {
                background-color: #8b8f61;
                box-shadow: 0 0 3px #8b8f61;
            }
        }

        .ribbon-pop {
            background: linear-gradient(270deg, #065922 5.25%, #29a838 96.68%);
            display: inline-block;
            padding: 10px 40px 10px 20px;
            color: white;
            font-size: 1.2em;
            position: relative;
        }

        .ribbon-pop:after {
            content: "";
            width: 0;
            height: 0;
            top: 0;
            position: absolute;
            right: 0;
            border-right: 20px solid #fff;
            border-top: 25px solid transparent;
            border-bottom: 20px solid transparent;
        }

        .ribbon-pop:before {
            height: 0;
            width: 0;
            border-top: 15px solid #381f57;
            border-left: 15px solid transparent;
            bottom: -15px;
            position: absolute;
            content: "";
            left: 0;
        }

        .slider {
            display: flex;
            align-items: center;
            overflow: hidden;
            border-radius: 1em;
            width: 100%;
            /* height: 500px; */
            box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.5);
            -webkit-tap-highlight-color: transparent;

        }

        .img-container {
            display: flex;
            transition: transform 300ms ease-in-out;
        }

        .fa-solid {
            cursor: pointer;
            color: white;
            position: absolute;
            opacity: 0.75;
            transition: opacity 100ms ease-in-out;
            z-index: 100;
        }

        .fa-solid:hover {
            opacity: 1;
        }

        .previous {
            left: 4.5rem;
        }

        .next {
            right: 4.5rem;
        }
    </style>

</head>

<body>
    <!-- banner -->
    <div class="" id="banner" style="background-color: #5cb85c38;">
        <div class="container text-center text-md-left py-3">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <a href="index.html"><img src="img/Arogyam_KFT/bk-kidney-care-high.png" alt="arogyabharat"></a>
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="#contact" class="text-white lead">Contact Us</a>
                    </div>
                </div>
            </header>
            <!-- <div class="row"> -->
            <!-- <div>
                <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                    class="display-3 text-white font-weight-bold my-5">
                    Arogyam KFT
                </h1>
                <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                    class="lead text-white my-4">
                    <b>Because nature is an expert of your health.</b>
                </p>
                <a href="#package" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"
                    data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">More Details</a>
            </div> -->
        </div>
    </div>
    </div>
    </div>





    <!-- Package Ayurvedic Section Start From Here -->

    <div class="container my-5 py-2" id="package">
        <h2 class="text-center font-weight-bold my-5 text-primary">KFT Overview</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-6 text-center">
                <img src="./img/Arogyam_KFT/arogyam_kft_single_product.jpg" alt="Kidney Vaidik Package" class="mx-auto">
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-6 text-left">
                <br>
                <h4>Arogyam KFT Kidney Care Tonic for Kindey Patient</p>
                    <h3 class="text-left"><b>Price: </b><del> ₹ 1000</del> ₹ 549 </h3>
                    <div class="more-detail text-left">

                        <p><b>Brand:</b> Ayuskalp <br>
                            <b>Item Form:</b> Syrup <br>
                            <b>Age Range:</b> Adult <br>
                            <b>Specific Uses:</b> Heal the Kidney <br>
                            <b>Package Information:</b> Bottle <br>
                            <b>Net Qunatity:</b> 200ml <br>
                            <b>Package Type:</b> Bottle
                        </p>


                        <div class="ribbon-pop mb-3">GMP Certified Product</div>

                        <div class="product_descripriton">
                            <ul>
                                <h5>About Product</h5>
                                <li>Improve Functional capacity of kidneys</li>
                                <li>Maximum concentration of herbs specifically formulated for the kidneys to promote
                                    kidney health overall</li>
                                <li>Provide anti-oxidants & bio molecules to check degenerative alteration</li>
                                <li>Delay Dialysis</li>
                            </ul>
                        </div>
                        <!-- <div class="btn-width bg-primary py-2 px-4 text-center "> -->
                        <!-- </div> -->
                    </div>
                    <a class="button py-2 px-4"
                        href="https://arogyabharat.store/index.php?route=product/product&product_id=409">Buy Now</a>

            </div>
        </div>
    </div>

    <!-- Package Ayurvedic Section End Here -->

    <!-- Experiment Package Section Start  -->
    <div class="container my-5 py-2" id="package">
        <h2 class="text-center font-weight-bold my-5 text-primary">KFT Overview</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-6 text-center">
                <!-- <img src="./img/Arogyam_KFT/arogyam_kft_single_product.jpg" alt="Kidney Vaidik Package" class="mx-auto"> -->
                <div class="slider">
                    <i class="fa-solid fa-angles-left fa-2x previous"></i>
                    <div class="img-container">
                      <img src="https://picsum.photos/id/237/800/500.jpg" alt="">
                      <img src="https://picsum.photos/id/137/800/500.jpg" alt="">
                      <img src="https://picsum.photos/id/127/800/500.jpg" alt="">
                      <img src="https://picsum.photos/id/300/800/500.jpg" alt="">
                      <img src="https://picsum.photos/id/1008/800/500.jpg?hmac=906z84ml4jhqPMsm4ObF9aZhCRC-t2S_Sy0RLvYWZwY" alt="">
                    </div>
                    <i class="fa-solid fa-angles-right fa-2x next"></i>
                  </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-6 text-left">
                <br>
                <h4>Arogyam KFT Kidney Care Tonic for Kindey Patient</p>
                    <h3 class="text-left"><b>Price: </b><del> ₹ 1000</del> ₹ 549 </h3>
                    <div class="more-detail text-left">

                        <p><b>Brand:</b> Ayuskalp <br>
                            <b>Item Form:</b> Syrup <br>
                            <b>Age Range:</b> Adult <br>
                            <b>Specific Uses:</b> Heal the Kidney <br>
                            <b>Package Information:</b> Bottle <br>
                            <b>Net Qunatity:</b> 200ml <br>
                            <b>Package Type:</b> Bottle
                        </p>


                        <div class="ribbon-pop mb-3">GMP Certified Product</div>

                        <div class="product_descripriton">
                            <ul>
                                <h5>About Product</h5>
                                <li>Improve Functional capacity of kidneys</li>
                                <li>Maximum concentration of herbs specifically formulated for the kidneys to promote
                                    kidney health overall</li>
                                <li>Provide anti-oxidants & bio molecules to check degenerative alteration</li>
                                <li>Delay Dialysis</li>
                            </ul>
                        </div>
                        <!-- <div class="btn-width bg-primary py-2 px-4 text-center "> -->
                        <!-- </div> -->
                    </div>
                    <a class="button py-2 px-4"
                        href="https://arogyabharat.store/index.php?route=product/product&product_id=409">Buy Now</a>

            </div>
        </div>
    </div>
    <!-- Experiment Package Section End  -->

    <!-- Video Slider Start Here  -->
    <div class="conatiner-fluid">
        <div class="container">
            <h2 class="mb-3">Doctor's Advice</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-12 my-2">
                    <div class="card rounded-end">
                        <div class="card-body">
                            <a href=""><img
                                    src="https://cdn.shopify.com/s/files/1/0588/4942/7643/files/Why_Does_Vaginal_Discharge_Smell_Bad-Dr_Aarati_Patil.jpg?v=1644925455"
                                    alt="" class="img-fluid" style="border-radius: 20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 my-2 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body">
                            <a href=""><img
                                    src="https://cdn.shopify.com/s/files/1/0588/4942/7643/files/Why_Does_Vaginal_Discharge_Smell_Bad-Dr_Aarati_Patil.jpg?v=1644925455"
                                    alt="" class="img-fluid" style="border-radius: 20px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 my-2 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body">
                            <a href=""><img
                                    src="https://cdn.shopify.com/s/files/1/0588/4942/7643/files/Why_Does_Vaginal_Discharge_Smell_Bad-Dr_Aarati_Patil.jpg?v=1644925455"
                                    alt="" class="img-fluid" style="border-radius: 20px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Video Slider Start End  -->


    <!-- 5 Points Section Start  -->

    <div class="conatiner-fluid my-4">
        <div class="container">
            <h3>Herbs to get relief from excessive discharge, itching</h3>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Certification_Stamps_FDA.svg?v=1635232461"
                            class="img-fluid" alt="" style="width: 20%;">
                        <p><a href="#">
                                <h5>29 Ayurvedic Herbs</h5>
                            </a></p>
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Inofrmation_ICON.svg?v=1635055468"
                            class=" img-fluid" alt="" style="width: 10%;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Certification_Stamps_FDA.svg?v=1635232461"
                            class="img-fluid" alt="" style="width: 20%;">
                        <p><a href="#">
                                <h5>29 Ayurvedic Herbs</h5>
                            </a></p>
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Inofrmation_ICON.svg?v=1635055468"
                            class=" img-fluid" alt="" style="width: 10%;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Certification_Stamps_FDA.svg?v=1635232461"
                            class="img-fluid" alt="" style="width: 20%;">
                        <p><a href="#">
                                <h5>29 Ayurvedic Herbs</h5>
                            </a></p>
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Inofrmation_ICON.svg?v=1635055468"
                            class=" img-fluid" alt="" style="width: 10%;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Certification_Stamps_FDA.svg?v=1635232461"
                            class="img-fluid" alt="" style="width: 20%;">
                        <p><a href="#">
                                <h5>29 Ayurvedic Herbs</h5>
                            </a></p>
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Inofrmation_ICON.svg?v=1635055468"
                            class=" img-fluid" alt="" style="width: 10%;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Certification_Stamps_FDA.svg?v=1635232461"
                            class="img-fluid" alt="" style="width: 20%;">
                        <p><a href="#">
                                <h5>29 Ayurvedic Herbs</h5>
                            </a></p>
                        <img src="https://cdn.shopify.com/s/files/1/0074/4036/7716/files/Inofrmation_ICON.svg?v=1635055468"
                            class=" img-fluid" alt="" style="width: 10%;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FAQ Section Start Here  -->
    <section class="faq-section">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** FAQ Start ***** -->
                <div class="col-md-6 offset-md-3">

                    <div class="faq-title text-center pb-3">
                        <h2 class="text-center font-weight-bold my-5">FAQ</h2>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="faq" id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                        data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What is Lorem Ipsum?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an
                                        unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                        data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span> Where does it come from?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                        roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000
                                        years
                                        old.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End Here  -->

    <!-- Other Two Package Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-3 my-4 ">
                <div class="card">
                    <img src="./img/Arogyam_KFT/arogyam_kft_two_product.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body m-3 ">
                        <h5 class="card-title">Arogyam KFT (Pack of 2)</h5>
                        <p class="card-text">
                            Deal of the Day <span class="badge badge-primary display-3">4% OFF</span>
                        </p>
                        <h3 class="text-left"><b>Price: </b><del> ₹ 1098</del> ₹ 1049</h3>
                        <a class="button py-2 px-4 my-3"
                            href="https://arogyabharat.store/index.php?route=product/product&product_id=414">More
                            Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mx-3 my-4 ">
                <div class="card">
                    <img src="./img/Arogyam_KFT/arogyam_kft_four_product.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body m-3 ">
                        <h5 class="card-title">Arogyam KFT (Pack of 4)</h5>
                        <p class="card-text">
                            Deal of the Day <span class="badge badge-primary display-3">9% OFF</span>
                        </p>
                        <h3 class="text-left"><b>Price: </b><del> ₹ 2196</del> ₹ 1999</h3>
                        <a class="button py-2 px-4 my-3"
                            href="https://arogyabharat.store/index.php?route=product/product&product_id=415">More
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Other Two Package End -->

    <!-- Why Choose Us Section Start from here -->

    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Why Choose</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="./img/Icon/ayurveda.png" alt="100% Ayurvedic" class="mx-auto py-3">
                <h4>100% Ayurvedic</h4>
                <p>Our treatment based on Ayurveda, Therapy and Yoga</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="./img/Icon/money.png" alt="Affordable Price" class="mx-auto py-3">
                <h4>Affordable Price</h4>
                <p>We are providing kidney treatment at very low cost</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="./img/Icon/certificate.png" alt="Goverment Certified" class="mx-auto py-3">
                <h4>Goverment Certified</h4>
                <p>Certified by Ayush Mantralaya, GMP, FDA, ISO and HALAL</p>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section End here -->

    <!-- Benefit of Package Start From Here -->

    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Benefit of Package</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="img/Icon/blood.png" alt="Reduce Creatinine" class="mx-auto py-3">
                <h4>Reduce Creatinine</h4>
                <p>Package helps to regenerate kidney and kidney starts to reduce Creatinine </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="img/Icon/dialysis.png" alt="Stop Dialysis" class="mx-auto py-3">
                <h4>Stop Dialysis</h4>
                <p>Kidney will start healing, and dialysis will be Stoped</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="img/Icon/7-days.png" alt="Result in 7" class="mx-auto py-3">
                <h4>Result in 15 days</h4>
                <p>You will see the improvement in next 15 days</p>
            </div>
        </div>
    </div>

    <!-- Benefit of Package End Here -->


    <!-- Story Section Strat From Here  -->

    <div id="story">
        <h2 class="text-center font-weight-bold my-5">Patient's Report</h2>
        <div id="story-section">
            <div class="story-pateint">
                <img src="./img/patients/Poonam_Upadhyay_varanasi.png" alt="">
                <div class="campaign-details clearfix p-15 text-center">
                    <h4 class="font-weight-600 mt-0">Poonam Upadhayay</h4>
                    <p>Varanasi, Uttar Pradesh<br>Creatinine reduced <b style="color: red;">12.51</b> to<b
                            style="color: rgb(24, 205, 0);"> 0.84</b> </p>
                </div>
                <div class="campaign-bottom clearfix ">
                    <a class="btn my-4 font-weight-bold atlas-cta cta-green" data-toggle="modal" data-target="#myModal1"
                        href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"
                        data-aos-once="true">View Report</a>
                </div>
            </div>
            <div class="story-pateint">
                <img src="./img/patients/islamun.png" alt="">
                <div class="campaign-details clearfix p-15 text-center">
                    <h4 class="font-weight-600 mt-0">Islamun Nisha
                    </h4>
                    <p>Allahabad, Uttar Pradesh<br>Creatinine reduced <b style="color: red;">6.20</b> to<b
                            style="color: rgb(24, 205, 0);"> 1.05</b> </p>
                </div>
                <div class="campaign-bottom clearfix ">
                    <a class="btn my-4 font-weight-bold atlas-cta cta-green" data-toggle="modal" data-target="#myModal3"
                        href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"
                        data-aos-once="true">View Report</a>
                </div>
            </div>
            <div class="story-pateint">
                <img src="./img/patients/biplab.png" alt="">
                <div class="campaign-details clearfix p-15 text-center">
                    <h4 class="font-weight-600 mt-0">Biplap Mehata</h4>
                    <p>Kharagpur, West Bangal<br>Creatinine reduced <b style="color: red;">9.59</b> to<b
                            style="color: rgb(24, 205, 0);"> 3.61</b> </p>
                </div>
                <div class="campaign-bottom clearfix ">
                    <a class="btn my-4 font-weight-bold atlas-cta cta-green" data-toggle="modal" data-target="#myModal4"
                        href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"
                        data-aos-once="true">View Report</a>
                </div>
            </div>
            <div class="story-pateint">
                <img src="./img/patients/murta-devi.png" alt="">
                <div class="campaign-details clearfix p-15 text-center">
                    <h4 class="font-weight-600 mt-0">Murta Devi</h4>
                    <p>Bhadohi, Uttar Pradesh<br>Creatinine reduced <b style="color: red;">8.21</b> to<b
                            style="color: rgb(24, 205, 0);"> 0.74</b> </p>
                </div>
                <div class="campaign-bottom clearfix ">
                    <a class="btn my-4 font-weight-bold atlas-cta cta-green" data-toggle="modal" data-target="#myModal2"
                        href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"
                        data-aos-once="true">View Report</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Story Section End Here  -->

    <!-- Pateint Testimonial Section Start from Here -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Patient's Testimonial</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <iframe width="" height="" src="https://www.youtube.com/embed/sA7rV1uaHBw">
                </iframe>

            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <iframe width="" height="" src="https://www.youtube.com/embed/n9n_Ct7f_iU">
                </iframe>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <iframe width="" height="" src="https://www.youtube.com/embed/t-qlm8UFC4I">
                </iframe>
            </div>
        </div>
    </div>

    <!-- Pateint Testimonial Section End Here -->

    <!-- Happy Pateint Start Here  -->

    <div id="happy-pateint">
        <img src="./img/happy-pateint.jpg" alt="">
    </div>

    <!-- Happy Pateint End Here  -->

    <!-- Contact Section Start From Here -->

    <div class="jumbotron jumbotron-fluid" id="contact" style="background-color: #5cb85c38">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        Contact us if you have any query or just want to say hello.
                    </p>
                    <ul class="list-unstyled">
                        <li id="phone"><a href="tel:+918957021249">Phone : 8957021249</a></li>
                        <li>Email : doctor@bkarogyam.com</li>
                        <li>Address : Arogyabharat.store, Manduvadih Lahartara Road, Shivdaspur,Near Hori Lal Park,
                            Varanasi-221103</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form name="contact_form" method="POST" onsubmit="return validateForm()" action="thank-you.php">
                        <div class="row">
                            <div class="form-group col-md-12" id="name">
                                <label for="name">Your Name</label>
                                <!-- <input type="name" class="form-control" id="name"> -->
                                <input id="form_name" name="name" class="form-control" type="text" required=""><span
                                    id="name" class="formerror" style="color: red"> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6" id="disease">
                                <label for="form_name" id="disease-label">Disease </label>
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

                            <div class="form-group col-md-6" id="phone">
                                <label for="number">Your Number</label>
                                <input id="form_phone" name="phone" class="form-control" type="number" required><span
                                    id="phone" class="formerror" style="color: red"> </span>
                            </div>
                        </div>
                        <div class="form-group" id="message">
                            <label for="message">Message</label>
                            <!-- <textarea class="form-control" id="message" rows="3"></textarea> -->
                            <textarea id="form_message" name="message" class="form-control required"
                                rows="3"></textarea><span id="message" class="formerror" style="color: red"> </span>

                        </div>
                        <button type="submit" name="submit" value="E-com"
                            class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                    <script src="form-validation.js"></script>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Contact Section End Here  -->


    <!-- Horizontal Line  -->
    <div id="line"></div>

    <!-- Powered By B.K Arogyam -->
    <div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12 text-white align-self-center text-center text-center my-2 powered">
                    Powered By <a href="https://bkkidneycare.com/">B.k. Arogyam</a>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
        });


    </script>


    <!-- Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class=" border-redi modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Patient Report</h4>
                </div>
                <div class="modal-body">
                    <!-- Contact Form -->
                    <img src="./img/pt-report/poonam_upadhyay_report.jpg">
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class=" border-redi modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Patient Report</h4>
                </div>
                <div class="modal-body">
                    <!-- Contact Form -->
                    <img src="./img/pt-report/munta-devi-report.jpg" alt="">
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class=" border-redi modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Patient Report</h4>
                </div>
                <div class="modal-body">
                    <img src="./img/pt-report/islamu-report.jpg">
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class=" border-redi modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Patient Report</h4>
                </div>
                <div class="modal-body">
                    <img src="./img/pt-report/Biplab_Kumar_kidney_patient.jpg" alt="">
                </div>

            </div>
        </div>
    </div>

    <!-- Whatsapp Click Button Section Start-->
    <div class="whatsapp-float">
        <a href="https://wa.me/918957021249" target="_blank"><img src="img/Icon/whatsapp.png" alt=""></a>
    </div>

    <!-- Whatsapp Click Button Section End-->




    <script src="static/js/jquery-plugin-collection.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script>
        const next = document.querySelector(".next");
        const prev = document.querySelector(".previous");

        const numImg = document.querySelectorAll("img").length;
        let currImg = 1;

        let timeoutID;

        next.addEventListener("click", () => {
            currImg++;
            clearTimeout(timeoutID);
            updateImage();
        });

        prev.addEventListener("click", () => {
            currImg--;
            clearTimeout(timeoutID);

            updateImage();
        });

        const imgcontainer = document.querySelector(".img-container");

        function updateImage() {
            if (currImg > numImg) {
                currImg = 1;
            } else if (currImg < 1) {
                currImg = numImg;
            }
            imgcontainer.style.transform = `translateX(-${(currImg - 1) * 800}px)`;

            timeoutID = setTimeout(() => {
                currImg++;
                updateImage();
            }, 5000);
        }

        updateImage();
    </script>


</body>

</html>