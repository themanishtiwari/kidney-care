<?php
include('dbcon.php');
if(isset($_POST['checkbox'][0])){
	foreach($_POST['checkbox'] as $list){
		$id=mysqli_real_escape_string($conn,$list);
		mysqli_query($conn,"delete from social where sr='$id'");
	}
}
?>