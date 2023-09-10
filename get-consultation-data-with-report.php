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
      <!-- Stylesheet -->
      <link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="static/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="static/css/animate.css" rel="stylesheet" type="text/css">
    <link href="static/css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="static/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />

    <!-- CSS | Preloader Styles -->
    <link href="static/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="static/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="static/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="/static/css/style.css" rel="stylesheet" type="text/css"> -->
    <link href="static/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- Revolution Slider 5.x CSS settings -->
    <link href="static/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="static/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="static/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <link href="static/css/style-main.php" rel="stylesheet" type="text/css" />

    <!-- Doctpr CSS  -->
    <?php include 'static/css/patient_page.php'  ?>


    <!-- CSS | Theme Color -->
    <link href="static/css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">

    <!-- Footer Scripts -->
    <!-- external javascripts -->
    <script src="static/js/jquery-2.2.4.min.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="static/js/jquery-plugin-collection.js"></script>

    <!-- date selector js -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  
  
</head>
<body>
<?php include 'header.php';?>
<a href="bk-admin-panel.php"><button class="btn btn-warning" style="">Back</button></a>
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
      <th scope="col">Report</th>
      <th scope="col" >Edit</th>
    </tr>
  </thead>
  <tbody>
    
<?php
$i=1;
include "dbcon.php";
$sub_sql=$_SESSION['datee'];
$table= "SELECT * FROM  patients $sub_sql ORDER BY sr DESC";
$result =mysqli_query($conn,$table);
  while ($row= mysqli_fetch_array($result)) { 
    if ($row['report']){
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
      <td><?php echo $row['address'] ?></td>
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
    <td>
    <div class="">
                    <a href="" class="btn btn-info" data-toggle="modal"
                        data-target="#myModal<?php echo $row['sr'] ?>">View
                        Report</a>
                        <!-- Modal -->
                    <div class="modal fade" id="myModal<?php echo $row['sr'] ?>" tabindex="1" role="dialog"
                        aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class=" border-redi modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Patient Report</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo $row['report'] ?>">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Modal -->
                </div>
                </td>
      <td><form method="post" action="edit.php"><button class="btn btn-dark" type="submit" name="submit" value="<?php echo $row['sr'] ?>" class="btn">Edit</button></form></td>
      </tr>
      

  <?php
          
      }
    }
?>
  </tbody>
</table>
<br>
<br>
<br>
<br>

<br>


<script>
    $('#dt-basic-checkbox').dataTable({

        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        }
    });
</script>


<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        nav: true,
        dots: false,
        navText: [
            '',
            ''
        ],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>


</body>
<script>
  $( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3,
          dateFormat:"yy-mm-dd",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3,
        dateFormat:"yy-mm-dd",
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