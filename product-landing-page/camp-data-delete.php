<?php 
      session_start();
      if (!isset($_SESSION['id'])) {
      header('location: index.html');
    }
    else{  
      $sub_sql="";
      $toDate=$fromDate="";
      if(isset($_POST['submit'])){
        $from=$_POST['from'];
        //$fromDate=$from;
        //$fromArr=explode("/",$from);
        //$from=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];

        $to=$_POST['to'];
        //$toDate=$to;
        //$toArr=explode("/",$to);
        //$to=$toArr['2'].'-'.$toArr['1'].'-'.$toArr['0'];
        //echo $from."<br>".$to;

        $sub_sql= "WHERE date >= '$from' && date <= '$to' ";
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
  <link rel="stylesheet" href="static/css/bootstrap.min-4.1.3.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  
</head>
<body>
<div class="container-fluid px-0">
  <nav class="navbar navbar-header  navbar-dark bg-dark">
    <a href="bk-admin-panel.php"><img src="static/images/bk-kidney-care-white.png" height="30" class="d-inline-block align-top" alt="bk kidney care"></a>
    <a href="special-admin-panel.php"><button class="btn btn-warning my-2 my-sm-0">Back</button></a>
   
  </a>
</nav>
<br>
<div class="container-fluid">
<nav class="navbar navbar-header">
<form method="post">
      <label for="from">From</label>
      <input type="text" id="from" name="from" value="<?php echo $fromDate?>">
      <label for="to">to</label>
      <input type="text" id="to" name="to" value="<?php echo $toDate?>">
      <input type="submit" name="submit" value="Filter">
  </form>

  
<a href="javascript:void(0)" class="link_delete" onclick="delete_all()"><button class="btn btn-danger my-2 ">Delete</button></a>
    </nav></div>
    <form method="post" id="frm">
<table class="table">
<thead class="thead-dark">
    <tr>
      <th><input type="checkbox" onclick="select_all()"  id="delete"/></th>
      <th scope="col">Sr.</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">disease</th>
      <th scope="col">category</th>
      <th scope="col">Message</th>
      <th scope="col">Remark</th>
    </tr>
  </thead>
  <tbody>
    
<?php
$i=1;
include "dbcon.php";
$table= "SELECT * FROM user2 $sub_sql ORDER BY sr DESC";
$result =mysqli_query($conn,$table);
  while ($row= mysqli_fetch_array($result)) { 
    ?>
    <tr id="box<?php echo $row['sr']?>">
    <td><input type="checkbox" id="<?php echo $row['sr']?>" name="checkbox[]" value="<?php echo $row['sr']?>"/></td>
    <td><?php echo $i; $i=$i+1; ?></td>
    <td><?php echo $row['date'];
              //$dat=explode("-",$datedef);
              //$dater=$dat['2'].'-'.$dat['1'].'-'.$dat['0'];
              //echo $dater   ?></td>
    <td><?php echo $row['time'];
              //$tim=explode(":",$timedef);
              //$timer=$tim['0'].':'.$tim['1']; 
              //echo $timer;    ?></td>
    <td><?php echo $row['name'] ?><br>
        <?php echo $row['source'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['disease'] ?></td>
    <td><?php echo $row['category'] ?></td>
    <td><?php echo $row['message'] ?></td>
    <td><p style="border:1px solid black; padding:7px;" col="12" rows="3" disabled>
        <?php echo $row['remark1'] ?><br>
        <?php echo $row['remark2'] ?><br>
        <?php echo $row['remark3']  ?><br>
        <?php echo$row['remark4'] ?></p>    
    </td>
    </tr>

  <?php
          
      }
?>
  </tbody>
</table>
</form>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
function select_all(){
	if(jQuery('#delete').prop("checked")){
		jQuery('input[type=checkbox]').each(function(){
			jQuery('#'+this.id).prop('checked',true);
		});
	}else{
		jQuery('input[type=checkbox]').each(function(){
			jQuery('#'+this.id).prop('checked',false);
		});
	}
}


function delete_all(){
	var check=confirm("Are you sure?");
	if(check==true){
		jQuery.ajax({
      type:'post',
			data:jQuery('#frm').serialize(),
      success:function(result){
				jQuery('input[type=checkbox]').each(function(){
					if(jQuery('#'+this.id).prop("checked")){
						jQuery('#box'+this.id).remove();
					}
				});
			}

		});
    <?php
        include('dbcon.php');
        if(isset($_POST['checkbox'][0])){
	      foreach($_POST['checkbox'] as $list){
		    $id=mysqli_real_escape_string($conn,$list);
		    mysqli_query($conn,"delete from user2 where sr='$id'");
	}
}
?>
	}
}

  </script>
</html>
<?php
          
      }
?>