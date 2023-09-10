<?php
    include'dbcon.php';

    for ($sr=1; $sr<11; $sr++) {
        $query = "SELECT * FROM user2 where sr=$sr";
        $show = mysqli_query($conn,$query);
        $row= mysqli_fetch_array($show);
        $datee=$row['date'];
        echo $datee."<br />";
          $fromArr=explode("-",$datee);
          $date=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];
          echo $date."<br />";
          
            $update=mysqli_query($conn,"UPDATE user2 SET date='$date' WHERE sr=$sr");

    
         if ($update) {
           echo 'Successfully updated '.$sr.'<br />';}
   else{
    echo 'Failed updated '.$sr.'<br />';
   }
   }
?>
