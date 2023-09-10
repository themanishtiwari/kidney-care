<?php
     session_start();
     if (!isset($_SESSION['id'])) {
      header('location: index.php');
    }
    else{ 
    include'dbcon.php';
    if (isset($_POST["submit"]) && $_FILES['img']['name']) {
	        $sr=$_POST["submit"];
            $name=$_POST["name"];
            $expertise=$_POST["expertise"];
            $qualification=$_POST["qualification"];
            $experience=$_POST["experience"];
            date_default_timezone_set('Asia/Kolkata');
            $time= date('d-m-y g:i a');

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

              //Remove old image
              $query = "SELECT * FROM doctor where sr=$sr";
              $show = mysqli_query($conn,$query);
              $row= mysqli_fetch_array($show);
              $image=$row['image'];
              unlink($image);

           //data insertion
           $update=mysqli_query($conn,"UPDATE doctor SET name='$name', expertise='$expertise', qualification='$qualification', experience='$experience', image='$folder' WHERE sr=$sr ");

        
         if ($update) {
           echo '<h1 style="color: green; text-align: center; margin: 300px;">Updated Successfully</h1>';
           header("refresh:1;url=special-admin-panel.php");
            }
        else{
        echo '<h1 style="color: green; text-align: center; margin: 300px;">Updation Failed</h1>';
        header("refresh:1;url=special-admin-panel.php");
        }
   }
}
  else{
            $sr=$_POST["submit"];
            $name=$_POST["name"];
            $expertise=$_POST["expertise"];
            $qualification=$_POST["qualification"];
            $experience=$_POST["experience"];
            date_default_timezone_set('Asia/Kolkata');
            $time= date('d-m-y g:i a');


           //data insertion
           $update=mysqli_query($conn,"UPDATE doctor SET name='$name', expertise='$expertise', qualification='$qualification', experience='$experience' WHERE sr=$sr ");

        
         if ($update) {
           echo '<h1 style="color: green; text-align: center; margin: 300px;">Updated Successfully</h1>';
           header("refresh:1;url=special-admin-panel.php");
            }
        else{
        echo '<h1 style="color: green; text-align: center; margin: 300px;">Updation Failed</h1>';
        header("refresh:1;url=special-admin-panel.php");
        }
   }
}
?>