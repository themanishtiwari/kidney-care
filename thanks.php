<?php
   include'dbcon.php';
   if (isset($_POST["submit"])) {

           $name=$_POST["name"];
           $phone=$_POST["phone"];
           $disease=$_POST["disease"];
           $message=$_POST["message"];
           date_default_timezone_set('Asia/Kolkata');
           $date= date('Y-m-d');
           $time= date('g:i a');

           if (!preg_match("/[`!@#$%^*()_\=\[\]{};':\\|<>\/?~]/",$message)&& preg_match("/^[0-9 ]+$/",$phone)&& preg_match("/^[A-Za-z ]+$/",$name)) {
    
            //image submission
            if($_FILES['img']['name']){
                $info=getimagesize($_FILES['img']['tmp_name']);
                $filename= $_FILES['img']['name'];
                $tempname= $_FILES['img']['tmp_name'];
                $size=$_FILES['img']['size'];
                $extention= pathinfo($filename,PATHINFO_EXTENSION);
                $filenm= pathinfo($filename,PATHINFO_FILENAME);
                $filenameok= $filenm.date("mjYHis").".".$extention;
                $output= 'static/images/form-report/'.$filenameok;
    
                $fileexe= explode('.',$filename);
                $imgextension= strtolower(end($fileexe));
                $array= array('png','jpeg','jpg','webp');
          
                 if (in_array($imgextension, $array)) {
                    if($size<1048576){
                        if(isset($info['mime'])){
                            if($info['mime']=="image/jpg"){
                                $img=imagecreatefromjpg($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/png"){
                                $img=imagecreatefrompng($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/jpeg"){
                                $img=imagecreatefromjpeg($_FILES['img']['tmp_name']);
                            }
                            else{
                                echo "Select image in jpg, jpeg, png image format";
                            }
                            if(isset($img)){
                                imagejpeg($img,$output,70);
                                //echo "image compressed successfully";

                                $insert="INSERT INTO `patients`(`date`, `time`, `name`, `phone`, `disease`, `message`, `report`) VALUES ('$date','$time','$name','$phone','$disease','$message','$output')";
                                $sql=mysqli_query($conn,$insert);
                            }
                    }else{
                    echo "not compress";
                    }
                    }
                    elseif($size<2097152){
                        if(isset($info['mime'])){
                            if($info['mime']=="image/jpg"){
                                $img=imagecreatefromjpg($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/png"){
                                $img=imagecreatefrompng($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/jpeg"){
                                $img=imagecreatefromjpeg($_FILES['img']['tmp_name']);
                            }
                            else{
                                echo "Select image in jpg, jpeg, png image format";
                            }
                            if(isset($img)){
                                imagejpeg($img,$output,50);
                                //echo "image compressed successfully";

                                $insert="INSERT INTO `patients`(`date`, `time`, `name`, `phone`, `disease`, `message`, `report`) VALUES ('$date','$time','$name','$phone','$disease','$message','$output')";
                                $sql=mysqli_query($conn,$insert);
                            }
                    }else{
                    echo "not compress";
                    }
                    }
                    elseif($size<3145728){
                        if(isset($info['mime'])){
                            if($info['mime']=="image/jpg"){
                                $img=imagecreatefromjpg($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/png"){
                                $img=imagecreatefrompng($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/jpeg"){
                                $img=imagecreatefromjpeg($_FILES['img']['tmp_name']);
                            }
                            else{
                                echo "Select image in jpg, jpeg, png image format";
                            }
                            if(isset($img)){
                                imagejpeg($img,$output,33);
                                //echo "image compressed successfully";

                                $insert="INSERT INTO `patients`(`date`, `time`, `name`, `phone`, `disease`, `message`, `report`) VALUES ('$date','$time','$name','$phone','$disease','$message','$output')";
                                $sql=mysqli_query($conn,$insert);
                            }
                    }else{
                    echo "not compress";
                    }
                    }
                    elseif($size<4194304){
                        if(isset($info['mime'])){
                            if($info['mime']=="image/jpg"){
                                $img=imagecreatefromjpg($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/png"){
                                $img=imagecreatefrompng($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/jpeg"){
                                $img=imagecreatefromjpeg($_FILES['img']['tmp_name']);
                            }
                            else{
                                echo "Select image in jpg, jpeg, png image format";
                            }
                            if(isset($img)){
                                imagejpeg($img,$output,25);
                                //echo "image compressed successfully";

                                $insert="INSERT INTO `patients`(`date`, `time`, `name`, `phone`, `disease`, `message`, `report`) VALUES ('$date','$time','$name','$phone','$disease','$message','$output')";
                                $sql=mysqli_query($conn,$insert);
                            }
                    }else{
                    echo "not compress";
                    }
                    }
                    elseif($size<5242880){
                        if(isset($info['mime'])){
                            if($info['mime']=="image/jpg"){
                                $img=imagecreatefromjpg($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/png"){
                                $img=imagecreatefrompng($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/jpeg"){
                                $img=imagecreatefromjpeg($_FILES['img']['tmp_name']);
                            }
                            else{
                                echo "Select image in jpg, jpeg, png image format";
                            }
                            if(isset($img)){
                                imagejpeg($img,$output,20);
                                //echo "image compressed successfully";

                                $insert="INSERT INTO `patients`(`date`, `time`, `name`, `phone`, `disease`, `message`, `report`) VALUES ('$date','$time','$name','$phone','$disease','$message','$output')";
                                $sql=mysqli_query($conn,$insert);
                            }
                    }else{
                    echo "not compress";
                    }
                    }
                    elseif($size<7340032){
                        if(isset($info['mime'])){
                            if($info['mime']=="image/jpg"){
                                $img=imagecreatefromjpg($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/png"){
                                $img=imagecreatefrompng($_FILES['img']['tmp_name']);
                            }elseif($info['mime']=="image/jpeg"){
                                $img=imagecreatefromjpeg($_FILES['img']['tmp_name']);
                            }
                            else{
                                echo "Select image in jpg, jpeg, png image format";
                            }
                            if(isset($img)){
                                imagejpeg($img,$output,14);
                                //echo "image compressed successfully";

                                $insert="INSERT INTO `patients`(`date`, `time`, `name`, `phone`, `disease`, `message`, `report`) VALUES ('$date','$time','$name','$phone','$disease','$message','$output')";
                                $sql=mysqli_query($conn,$insert);
                            }
                    }else{
                    echo "not compress";
                    }
                    }
                    else{
                        echo "please select image less than 7 MB";
                    }
                    }
                    else{
                        echo "Select image in jpg, jpeg, png image format";
                    }

                }
                else{
                    $insert="INSERT INTO `patients`(`date`, `time`, `name`, `phone`, `disease`, `message`) VALUES ('$date','$time','$name','$phone','$disease','$message')";
                    $sql=mysqli_query($conn,$insert);
                }
    

             //start Mail Properties:
             $to= "manishtiwaribkarogyam@gmail.com, pramodbkarogyam123@gmail.com";
             //$to= "manishtiwaribkarogyam@gmail.com, tiwariseoo@gmail.com";
             $subject= "New Registration";
               $message="New Form Details: \r\nName: ".$name."\r\nDisease: ".$disease."\r\nPhone: ".$phone."\r\nMessage: ".$message;
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
   header("refresh:4; url=index.php");
   }
   else{
        echo '<h1 style="color: red; text-align: center; margin: 300px;">Registration Failed</h1>';
        header("refresh:1;url=index.php");
   }
}
   else{
    echo '<h1 style="color: red; text-align: center; margin: 300px;">Invalid input, Form not submitted</h1>';
    header("refresh:3;url=index.php");
   }
}

?>