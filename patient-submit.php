<?php
    session_start();
    if (!isset($_SESSION['sr'])) {
        header('location: admin-login.php');
      }
      else{

   include'dbcon.php';

   if (isset($_POST["submit"])) {

           $name=$_POST["name"];
           $address=$_POST["address"];
           $review=$_POST["review"];
           date_default_timezone_set('Asia/Kolkata');
           $date= date('d-m-Y g:i a');

           if (!preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$address)&& preg_match("/^[A-Za-z ]+$/",$name)&&!preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$review)) {

            //image submission
            $filename= $_FILES['img']['name'];
            $tempname= $_FILES['img']['tmp_name'];
            $size=$_FILES['img']['size'];
            $extention= pathinfo($filename,PATHINFO_EXTENSION);
            $filenm= pathinfo($filename,PATHINFO_FILENAME);
            $filenameok= $filenm.date("mjYHis").".".$extention;
            $folder = 'static/images/patients-review/'.$filenameok;
      
            $fileexe= explode('.',$filename);
            $imgextension= strtolower(end($fileexe));
            $array= array('png','jpeg','jpg','webp');

            //Report submission
            $filename1= $_FILES['report']['name'];
            $tempname1= $_FILES['report']['tmp_name'];
            $size1=$_FILES['report']['size'];
            $extention1= pathinfo($filename1,PATHINFO_EXTENSION);
            $filenm1= pathinfo($filename1,PATHINFO_FILENAME);
            $filenameok1= $filenm1.date("mjYHis").".".$extention1;
            $report= 'static/images/report/'.$filenameok1;
      
            $fileexe1= explode('.',$filename1);
            $imgextension1= strtolower(end($fileexe1));
      
             if (in_array($imgextension, $array)&& in_array($imgextension1, $array)) {
                move_uploaded_file($tempname, $folder);
                move_uploaded_file($tempname1, $report);
           
                


             //data insertion
           $insert="INSERT INTO `patientreview`(`date`, `name`, `address`, `review`, `profile`, `report`) VALUES ('$date','$name','$address','$review','$folder','$report')";

        $sql=mysqli_query($conn,$insert);
    
             //start Mail Properties:
        
        //      $to= "manishtiwaribkarogyam@gmail.com, pramodbkarogyam123@gmail.com";
        //      //$to= "manishtiwaribkarogyam@gmail.com, tiwariseoo@gmail.com";
        //      $subject= "New Registration";
        //        $message="New Form Details: \r\nName: ".$name."\r\nDisease: ".$disease."\r\nPhone: ".$phone."\r\nMessage: ".$message;
        //    $from= "From: BK Kidney Care <info@bkkidneycare.com>";
        //    $sms = mail($to, $subject, $message, $from);
        
        //    if ($sms) { echo " Message Sent";}
        //    else{ echo " Message Not Sent";}
        
        //end  Mail Properties:
        
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
    <style>
        .thankyou {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
    </head>
<body>
<section class="">

        <div class="thankyou">
            <div data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                <img src="./static/images/icon/success.gif" alt="form-submitted">
            </div>
            <div data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                <h3 class="text-center" style="font-size: 1.2rem; color: rgb(74, 148, 0);">Submitted Succesfully..<br> We will get back to you soon !</h3>
            </div>
        </div>
        
        
</section>       

</body>
</html>
   <?php 
   header("refresh:4; url=patient-form.php");
   }
   else{
        echo '<h1 style="color: red; text-align: center; margin: 300px;">Registration Failed</h1>';
        header("refresh:1;url=patient-form.php");
   }
}
else{
    echo '<h1 style="color: red; text-align: center; margin: 300px;">Selected image not in JPG, PNG, JPEG Format</h1>';
    header("refresh:3;url=patient-form.php");
   }
           }
   else{
    echo '<h1 style="color: red; text-align: center; margin: 300px;">Invalid input, Form not submitted</h1>';
    header("refresh:3;url=patient-form.php");
   }
            }
        }
?>