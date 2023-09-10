<?php 
      session_start();
      
      if (!isset($_SESSION['sr'])) {
      header('location: admin-login.php');
    }
    else{  
      if(!isset($_SESSION['from'])){
        $_SESSION['from']="";
        $_SESSION['to']="";
        $_SESSION['datee']="";
        $_SESSION['category']="";
      }
      if(!isset($_SESSION['category'])){
        $_SESSION['category']="";
      }

      $sub_sql="";
      $toDate=$fromDate="";
      if(isset($_POST['submit'])){
        $category=$_POST['category'];
        $from=$_POST['from'];
        $_SESSION['from'] = $fromDate=$from;
        $_SESSION['category']=$category;
        //$fromArr=explode("-",$from);
        //$from=$fromArr['0'].'-'.$fromArr['1'].'-20'.$fromArr['2'];

        $to=$_POST['to'];
        $_SESSION['to']=$toDate=$to;
        //$toArr=explode("-",$to);
        //$to=$toArr['0'].'-'.$toArr['1'].'-'.$toArr['2'];
        
        $sub_sql= "WHERE date >= '$from' && date <= '$to' && category='$category'";
        $_SESSION['datee']=$sub_sql;
        
      }
      elseif(isset($_POST['submit1'])){
        $from=$_POST['from'];
        $_SESSION['from'] = $fromDate=$from;
          //$fromArr=explode("-",$from);
          //$from=$fromArr['0'].'-'.$fromArr['1'].'-20'.$fromArr['2'];
  
          $to=$_POST['to'];
          $_SESSION['to']=$toDate=$to;
          //$toArr=explode("-",$to);
          //$to=$toArr['0'].'-'.$toArr['1'].'-'.$toArr['2'];
          
          $sub_sql= "WHERE date >= '$from' && date <= '$to'";
          $_SESSION['datee']=$sub_sql;
          
  
        }
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registered Students Details</title>
  <link href="static/images/Bk%20arogyam%20logo.png" rel="shortcut icon" type="image/png">
  <link rel="stylesheet" href="css/bootstrap.min-4.1.3.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> 
  
</head>
<body>
<div class="container-fluid px-0">
  <nav class="navbar navbar-header  navbar-dark bg-dark">
    <a href="bk-admin-panel.php"><img src="static/images/bk-kidney-care-white.png" height="30" class="d-inline-block align-top" alt="bk kidney care"></a>
    <a href="bk-admin-panel.php"><button class="btn btn-warning my-2 my-sm-0">Back</button></a>
   
  </a>
</nav>
<br>
<div>
  <?php
  $fromDate=$_SESSION['from'];
  $toDate= $_SESSION['to'];
  $category=$_SESSION['category'];
  ?>
  
  <form method="post">
      <label for="from">From</label>
      <input type="text" id="from" name="from" value="<?php echo $fromDate?>">
      <label for="to">to</label>
      <input type="text" id="to" name="to" value="<?php echo $toDate?>">
      <input type="submit" name="submit1" value="Filter">
  </form>
</div>
<div>
  <form method="post">
      <label for="from">From</label>
      <input type="text" id="from" name="from" value="<?php echo $fromDate?>">
      <label for="to">to</label>
      <input type="text" id="to" name="to" value="<?php echo $toDate?>">
      <label for="category">Category</label>
      <select name="category" type="text">
            <option value="<?php echo $category?>"><?php echo $category?></option>
            <option value="">Choose</option>
            <option value="Hot">Hot</option>
            <option value="Warm">Warm</option>
            <option value="Cold">Cold</option>
            <option value="Closed">Closed</option>
        </select>
      <input type="submit" name="submit" value="Filter">
  </form>
      </div>
      

<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">Sr.</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Other</th>
      <th scope="col">Message</th>
      <th scope="col">Address</th>
      <th scope="col">Category</th>
      <th scope="col">Remark</th>
      <th scope="col" >Edit</th>
    </tr>
  </thead>
  <tbody>
    
<?php
$i=1;
include "dbcon.php";
$sub_sql=$_SESSION['datee'];
$table= "SELECT * FROM  social $sub_sql ORDER BY sr DESC";
$result =mysqli_query($conn,$table);
  while ($row= mysqli_fetch_array($result)) { 
    ?>
    <tr>
      <td><?php echo $i; $i=$i+1; ?></td>
      <td><?php echo $row['date'];
          //$dat=explode("-",$datedef);
          //$dater=$dat['2'].'-'.$dat['1'].'-'.$dat['0'];
          //echo $dater   ?>
          <br><?php echo $row['time'];
          //$tim=explode(":",$timedef);
          //$timer=$tim['0'].':'.$tim['1']; 
          //echo $timer;    ?></td>
      <td><?php echo $row['name'] ?><br>
          <?php echo $row['phone'] ?>
          <br><p style="font-size: small;"><?php echo $row['disease'] ?><p></td>
          <td><?php echo $row['other'] ?></td>
      <td><?php echo $row['message'] ?></td>
      <td><?php echo $row['address'] ?><br>
      <?php echo $row['source'] ?>  </td>
      <?php $cat=$row['category'];
          if($cat=="Hot"){
            $style="btn btn-danger";
          }
          elseif($cat=="Warm"){
            $style="btn btn-success";
          }
          elseif($cat=="Cold"){
            $style="btn btn-warning";
          }
          else{
            $style="btn btn-light";
          }      
      ?>
      <td><button class="<?php echo $style ?>"> <?php echo $row['category'] ?></button></td>
      <td><p style="border:1px solid black;  padding:7px;" col="12" rows="3" disabled>
        <?php echo $row['remark1'] ?><br>
        <?php echo $row['remark2'] ?><br>
        <?php echo $row['remark3']  ?><br>
        <?php echo($row['remark4']) ?></p>    
    </td>
      <td><form method="post" action="edit.php"><button class="btn btn-secondary" type="submit" name="submit" value="<?php echo $row['sr'] ?>" class="btn">Edit</button></form></td>
      </tr>
      

  <?php
          
      }
?>
  </tbody>
</table>
<br>

<b>Download Patients Details in CSV👉   </b>
    <a href="download.php"><button type="button" class="btn btn-success">download</button></a>
<br>
</center>
</body>
<script>
  $( function() {
    var dateFormat = "dd-mm-yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3,
          dateFormat:"dd-mm-yy",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3,
        dateFormat:"dd-mm-yy",
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
</html>
<?php
          
      }
?>