<?php
   include'dbcon.php';
   if (isset($_POST["submit"])) {

           $name=$_POST["name"];
           $phone=$_POST["phone"];
           $disease=$_POST["disease"];
           $message=$_POST["message"];
           $source=$_POST["submit"];

           date_default_timezone_set('Asia/Kolkata');
           $date= date('d-m-Y');
           $time= date('g:i a');

           if (!preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$message)&& preg_match("/^[0-9 ]+$/",$phone)&& preg_match("/^[A-Za-z ]+$/",$name)) {
               

           $insert="INSERT INTO `user2`(`date`, `time`, `name`, `phone`, `disease`, `message`, `source`) VALUES ('$date','$time','$name','$phone','$disease','$message','$source')";

        $sql=mysqli_query($conn,$insert);
    
             //start Mail Properties:
        
             $to= "manishtiwaribkarogyam@gmail.com, ajaybkarogyam@gmail.com";
             //$to= "manishtiwaribkarogyam@gmail.com, tiwariseoo@gmail.com";
             $subject= "New Registration";
               $message="Ajay lead Details: \r\nName: ".$name."\r\nDisease: ".$disease."\r\nPhone: ".$phone."\r\nMessage: ".$message;
           $from= "From: BK Kidney Care <info@bkkidneycare.com>";
           $sms = mail($to, $subject, $message, $from);
        
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
                <img src="img/Icon/success.gif" alt="form-submitted">
            </div>
            <div data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true">
                <h3 class="text-center" style="font-size: 1.2rem; color: rgb(74, 148, 0);">Submitted Succesfully..<br> We will get back to you soon !</h3>
            </div>
        </div>
        
        
</section>       

</body>
</html>
   <?php 
   header("refresh:4; url=index.php");
   }
   else{
        echo '<h1 style="color: red; text-align: center; margin: 300px;">Registration Failed</h1>';
        header("refresh:1;url=contact.php");
   }
}
   else{
    echo '<h1 style="color: red; text-align: center; margin: 300px;">Invalid input, Form not submitted</h1>';
    header("refresh:3;url=index.php");
   }
}

?>