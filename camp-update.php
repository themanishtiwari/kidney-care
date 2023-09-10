<?php
     session_start();
     if (!isset($_SESSION['sr'])) {
      header('location: index.html');
    }
    else{ 
    include'dbcon.php';
    if (isset($_POST["submit"])) {
	       $sr=$_POST["submit"];
         $name=$_POST["name"];
         $address=$_POST["address"];
        $category=$_POST["category"];
        $other=$_POST["other"];
          date_default_timezone_set('Asia/Kolkata');
          $time= date('d-m-y g:i a');
          $remark1=$_POST["remark1"]." on ".$time;
           
$update=mysqli_query($conn,"UPDATE camp SET name='$name',address='$address', category='$category', other='$other', remark1='$remark1' WHERE sr=$sr ");

        
         if ($update) {
           echo '<h1 style="color: green; text-align: center; margin: 300px;">Updated Successfully</h1>';
           header("refresh:1;url=camp-data.php");
   }
   else{
        echo '<h1 style="color: green; text-align: center; margin: 300px;">Updation Failed</h1>';
        header("refresh:1;url=camp-data.php");
   }
   }
  elseif(isset($_POST["submit2"])) {
    $sr=$_POST["submit2"];
    $name=$_POST["name"];
    $address=$_POST["address"];
   $category=$_POST["category"];
   $other=$_POST["other"];
     date_default_timezone_set('Asia/Kolkata');
     $time= date('d-m-y g:i a');
     $remark2=$_POST["remark2"]." on ".$time;
      
$update=mysqli_query($conn,"UPDATE camp SET name='$name', address='$address', category='$category', other='$other', remark2='$remark2' WHERE sr=$sr ");

   
    if ($update) {
      echo '<h1 style="color: green; text-align: center; margin: 300px;">Updated Successfully</h1>';
      header("refresh:1;url=camp-data.php");
}
else{
   echo '<h1 style="color: green; text-align: center; margin: 300px;">Updation Failed</h1>';
   header("refresh:1;url=camp-data.php");
}
   }

   elseif(isset($_POST["submit3"])) {
      $sr=$_POST["submit3"];
      $name=$_POST["name"];
      $address=$_POST["address"];
     $category=$_POST["category"];
     $other=$_POST["other"];
       date_default_timezone_set('Asia/Kolkata');
       $time= date('d-m-y g:i a');
       $remark3=$_POST["remark3"]." on ".$time;
        
  $update=mysqli_query($conn,"UPDATE camp SET name='$name', address='$address', category='$category', other='$other', remark3='$remark3' WHERE sr=$sr ");
  
     
      if ($update) {
        echo '<h1 style="color: green; text-align: center; margin: 300px;">Updated Successfully</h1>';
        header("refresh:1;url=camp-data.php");
  }
  else{
     echo '<h1 style="color: green; text-align: center; margin: 300px;">Updation Failed</h1>';
     header("refresh:1;url=camp-data.php");
  }
   }
   else{
      $sr=$_POST["submit4"];
      $name=$_POST["name"];
      $address=$_POST["address"];
     $category=$_POST["category"];
     $other=$_POST["other"];
       date_default_timezone_set('Asia/Kolkata');
       $time= date('d-m-y g:i a');
       $remark4=$_POST["remark4"]." on ".$time;
        
  $update=mysqli_query($conn,"UPDATE camp SET name='$name', address='$address', category='$category', other='$other', remark4='$remark4' WHERE sr=$sr ");
  
     
      if ($update) {
        echo '<h1 style="color: green; text-align: center; margin: 300px;">Updated Successfully</h1>';
        header("refresh:1;url=camp-data.php");
  }
  else{
     echo '<h1 style="color: green; text-align: center; margin: 300px;">Updation Failed</h1>';
     header("refresh:1;url=camp-data.php");
  }
   }
 }
?>