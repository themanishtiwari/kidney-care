<?php
      session_start();
     if (!isset($_SESSION['sr'])) {
        header('location: index.html');
    }
    else{
      include"dbcon.php";
      if (isset($_POST['submit'])) {

      $sr=$_POST['submit'];
      $query = "SELECT * FROM patients where sr=$sr";
      $show = mysqli_query($conn,$query);
      $row= mysqli_fetch_array($show);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

  <div class="form-row ">
    <div class="form-group col-md-5">
      <h4>Name: <?php echo $row['name'] ?></h4>
    </div>
    <div class="form-group col-md-4">
    <h4>Phone: <?php echo $row['phone'] ?></h4>
    </div>
    <div class="form-group col-md-3">
    <h4>Disease: <?php echo $row['disease'] ?></h4>
    </div>
  </div>
   <div class="form-row ">
  <div class="form-group col-md-12">
  <h5>Message: <?php echo $row['message'] ?></h5>
      <label>
    </div>
    </div>

    <!--form if else  -->
  <?php 
    if(!$row['remark1']){   ?>
      <form method="POST" action="update.php">
      <div class="form-row ">
        <div class="form-group col-md-4">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
      <div class="form-group col-md-2">
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

<?php 
    }
    elseif($row['remark1'] && !$row['remark2']){     ?>
      <form method="POST" action="update.php">
      <div class="form-row ">
        <div class="form-group col-md-4">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
      <div class="form-group col-md-2">
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
            <form method="POST" action="update.php">
      <div class="form-row ">
        <div class="form-group col-md-4">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
      <div class="form-group col-md-2">
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
      <form method="POST" action="update.php">
      <div class="form-row ">
        <div class="form-group col-md-4">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
        </div>
      <div class="form-group col-md-2">
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