<?php
   include'dbcon.php';

   if (isset($_POST["submit"])) {

           $name=$_POST["name"];
           $expertise=$_POST["expertise"];
           $qualification=$_POST["qualification"];
           $experience=$_POST["experience"];
           date_default_timezone_set('Asia/Kolkata');
           $date= date('d-m-Y g:i a');

           if (!preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$qualification)&& preg_match("/^[0-9 ]+$/",$experience)&& preg_match("/^[A-Za-z ]+$/",$name)&& preg_match("/^[A-Za-z ]+$/",$expertise)&& preg_match("/^[A-Za-z ]+$/",$name)) {
            
            //doctor-id-increment
            $query1="select * from doctor ORDER BY sr DESC LIMIT 1";
            $result =mysqli_query($conn,$query1);
            $row= mysqli_fetch_array($result);
            $doctorid=$row['doctorid']+1;

            //image submission
            $filename= $_FILES['img']['name'];
            $tempname= $_FILES['img']['tmp_name'];
            $size=$_FILES['img']['size'];
            $extention= pathinfo($filename,PATHINFO_EXTENSION);
            $filenm= pathinfo($filename,PATHINFO_FILENAME);
            $filenameok= $filenm.date("mjYHis").".".$extention;
            $folder = 'static/images/doctor/'.$filenameok;
      
            $fileexe= explode('.',$filename);
            $imgextension= strtolower(end($fileexe));
            $array= array('png','jpeg','jpg','webp');
      
             if (in_array($imgextension, $array)) {
                move_uploaded_file($tempname, $folder);

             //data insertion
           $insert="INSERT INTO `doctor`(`date`, `doctorid`, `name`, `expertise`, `qualification`, `experience`, `image`) VALUES ('$date','$doctorid','$name','$expertise','$qualification','$experience','$folder')";

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
   header("refresh:4; url=our-experts.php");
   }
   else{
        echo '<h1 style="color: red; text-align: center; margin: 300px;">Registration Failed</h1>';
        header("refresh:1;url=our-doctors.php");
   }
}
   else{
    echo '<h1 style="color: red; text-align: center; margin: 300px;">Invalid input, Form not submitted</h1>';
    header("refresh:3;url=our-doctors.php");
   }
}
   }

?>