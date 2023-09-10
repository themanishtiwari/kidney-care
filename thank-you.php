<?php
   include'dbcon.php';
   if (isset($_POST["submit"])) {

           $name=$_POST["name"];
           $phone=$_POST["phone"];
           $disease=$_POST["disease"];
           $message=$_POST["message"];
           $source=$_POST["submit"];
           date_default_timezone_set('Asia/Kolkata');
           $date= date('Y-m-d');
           $time= date('g:i a');

           if (!preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$message)&& preg_match("/^[0-9 ]+$/",$phone)&& preg_match("/^[A-Za-z ]+$/",$name)) {
               

           $insert="INSERT INTO `user1`(`date`, `time`, `name`, `phone`, `disease`, `message`, `source`) VALUES ('$date','$time','$name','$phone','$disease','$message','$source')";

        $sql=mysqli_query($conn,$insert);
    
             //start Mail Properties:
        
             $to= "manishtiwaribkarogyam@gmail.com, akashpandeybkarogyam@gmail.com";
             //$to= "manishtiwaribkarogyam@gmail.com, tiwariseoo@gmail.com";
             $subject= "New Akash Registration";
               $message="New Form Details: \r\nName: ".$name."\r\nDisease: ".$disease."\r\nPhone: ".$phone."\r\nMessage: ".$message."\r\nSource: ".$source;
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
   header("refresh:4; url=index.html");
   }
   else{
        echo '<h1 style="color: red; text-align: center; margin: 300px;">Registration Failed</h1>';
        header("refresh:1;url=get-consult.html");
   }
}
   else{
    echo '<h1 style="color: red; text-align: center; margin: 300px;">Invalid input, Form not submitted</h1>';
    header("refresh:3;url=index.html");
   }
}

?>