<?php
      session_start();
     if (!isset($_SESSION['sr'])) {
        header('location: admin-login.php');
    }
    else{
      include"dbcon.php";
      if (isset($_POST['submit'])) {

      $sr=$_POST['submit'];
      $query = "SELECT * FROM camp where sr=$sr";
      $show = mysqli_query($conn,$query);
      $row= mysqli_fetch_array($show);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" href="../static/css/bootstrap.min-4.1.3.css">
  <link href="../static/images/Bk%20arogyam%20logo.png" rel="shortcut icon" type="image/png">
</head>
<body>
	
<div class="container-fluid px-0">
  <nav class="navbar navbar-header  navbar-dark bg-dark">
    <a href="bk-admin-panel.php"><img src="static/images/bk-kidney-care-white.webp" height="30" class="d-inline-block align-top" alt="bk kidney care"></a>
    <a href="free-consultation-data.php"><button class="btn btn-warning my-2 my-sm-0">Back</button></a>
   
  </a>
</nav>
<br>
</div>
</div>
</div>


<!--form-->
<div class="container">
  <div class="form-row ">
    <div class="form-group col-md-3">
      <p style="font-size: 20px;"><b>Name: </b><span style="color: rgb(111, 13, 13); "><?php echo $row['name'] ?></span></p>
    </div>
    <div class="form-group col-md-3">
      <p style="font-size: 20px;"><b>Phone: </b><span style="color: rgb(13, 20, 111); "><?php echo $row['phone'] ?></span></p>
    </div>
    <div class="form-group col-md-3">
      <p style="font-size: 20px;"><b>Disease: </b><span style="color: rgb(160, 2, 2); "><?php echo $row['disease'] ?></span></p>
    </div>
    <div class="form-group col-md-3">
      <p style="font-size: 20px;"><b>Source: </b><span style="color: rgb(160, 2, 2); "><?php echo $row['source'] ?></span></p>
      </div>
  </div>
   <div class="form-row ">
  <div class="form-group col-md-9">
    <p style="font-size: 20px;"><b>Message: </b><span style="color: rgb(160, 2, 2); "><?php echo $row['message'] ?></span></p>
    </div>
    
    </div>
    <br>

    <!--form if else  -->
  <?php 
    if(!$row['remark1']){   ?>
      <form method="POST" action="camp-update.php">
      <div class="form-row ">
      <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
    </div>
        <div class="form-row ">
      <div class="form-group col-md-6">
        <label>Category</label>
        <select name="category" class="form-control" type="text" required>
            <option value="<?php echo $row['category'] ?>" selected><?php echo $row['category'] ?></option>
            <option value="Hot">Hot</option>
            <option value="Warm">Warm</option>
            <option value="Cold">Cold</option>
            <option value="Closed">Closed</option>
        </select>
        </div> 
        <div class="form-group col-md-6">
          <label>Other</label>
          <input type="text" class="form-control" name="other" value="<?php echo $row['other'] ?>">
        </div>
      </div>
      <div class="form-row ">
        <div class="form-group col-md-12">
          <label>Remark</label>
          <input type="text" class="form-control" name="remark1" value="" required>
          <!-- <textarea contact_list id="form_message" class="form-control required" name="remark1" rows="3" value="" ></textarea> -->
        </div>
      </div>
      <br>
      <div class="col-md-12 text-center">
    <button class="btn btn-success float-center" type="submit" name="submit" value="<?php echo $row['sr']; ?>">Update</button></a>
          </div>
    <br>
    <br>
    </form>
</div>

<?php 
    }
    elseif($row['remark1'] && !$row['remark2']){     ?>
      <form method="POST" action="camp-update.php">
      <div class="form-row ">
      <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
    </div>
        <div class="form-row ">
      <div class="form-group col-md-6">
        <label>Category</label>
        <select name="category" class="form-control" type="text" required>
            <option value="<?php echo $row['category'] ?>" selected><?php echo $row['category'] ?></option>
            <option value="Hot">Hot</option>
            <option value="Warm">Warm</option>
            <option value="Cold">Cold</option>
            <option value="Closed">Closed</option>
        </select>
        </div> 
        <div class="form-group col-md-6">
          <label>Other</label>
          <input type="text" class="form-control" name="other" value="<?php echo $row['other'] ?>">
        </div>
      </div>
      <div class="form-row ">
        <div class="form-group col-md-12">
          <label>Remark: </label><br><?php echo " ".$row['remark1'] ?>
          <input type="text" class="form-control" name="remark2" value="" required>
          <!-- <textarea contact_list id="form_message" class="form-control required" name="remark1" rows="3" value="" ></textarea> -->
        </div>
      </div>
      <br>
      <div class="col-md-12 text-center">
    <button class="btn btn-success float-center" type="submit" name="submit2" value="<?php echo $row['sr']; ?>">Update</button></a>
          </div>
    <br>
    <br>
    </form>

<?php
    }
    elseif($row['remark1'] && $row['remark2'] && !$row['remark3']) {    ?>
            <form method="POST" action="camp-update.php">
            <div class="form-row ">
      <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
    </div>
        <div class="form-row ">
      <div class="form-group col-md-6">
        <label>Category</label>
        <select name="category" class="form-control" type="text" required>
            <option value="<?php echo $row['category'] ?>" selected><?php echo $row['category'] ?></option>
            <option value="Hot">Hot</option>
            <option value="Warm">Warm</option>
            <option value="Cold">Cold</option>
            <option value="Closed">Closed</option>
        </select>
        </div> 
        <div class="form-group col-md-6">
          <label>Other</label>
          <input type="text" class="form-control" name="other" value="<?php echo $row['other'] ?>">
        </div>
      </div>
      <div class="form-row ">
        <div class="form-group col-md-12">
          <label>Remark: </label><br>
          <?php echo " ".$row['remark1'] ?><br>
          <?php echo " ".$row['remark2'] ?>

          <input type="text" class="form-control" name="remark3" value="" required>
          <!-- <textarea contact_list id="form_message" class="form-control required" name="remark1" rows="3" value="" ></textarea> -->
        </div>
      </div>
      <br>
      <div class="col-md-12 text-center">
    <button class="btn btn-success float-center" type="submit" name="submit3" value="<?php echo $row['sr']; ?>">Update</button></a>
          </div>
    <br>
    <br>
    </form>

<?php
      }
      else{ ?>
      <form method="POST" action="camp-update.php">
      <div class="form-row ">
      <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
    </div>
        <div class="form-row ">
      <div class="form-group col-md-6">
        <label>Category</label>
        <select name="category" class="form-control" type="text" required>
            <option value="<?php echo $row['category'] ?>" selected><?php echo $row['category'] ?></option>
            <option value="Hot">Hot</option>
            <option value="Warm">Warm</option>
            <option value="Cold">Cold</option>
            <option value="Closed">Closed</option>
        </select>
        </div> 
        <div class="form-group col-md-6">
          <label>Other</label>
          <input type="text" class="form-control" name="other" value="<?php echo $row['other'] ?>">
        </div>
      </div>
      <div class="form-row ">
        <div class="form-group col-md-12">
          <label>Remark: </label><br>
          <?php echo " ".$row['remark1'] ?><br>
          <?php echo " ".$row['remark2'] ?><br>
          <?php echo " ".$row['remark3'] ?>

          <!-- <input type="text" class="form-control" name="remark4" value="" required> -->
          <textarea contact_list id="form_message" class="form-control required" name="remark4" rows="3" value="" ><?php echo " ".$row['remark4'] ?></textarea>
        </div>
      </div>
      <br>
      <div class="col-md-12 text-center">
    <button class="btn btn-success float-center" type="submit" name="submit4" value="<?php echo $row['sr']; ?>">Update</button></a>
          </div>
    <br>
    <br>
    </form>

<?php
    }
 }
 }
 ?>

</body>
</html>