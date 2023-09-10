<?php
session_start();
if (!isset($_SESSION['sr'])) {
      header('location: index.html');
    }
    else{
include'dbcon.php';
$datee=$_SESSION['datee'];

	header('Content-Type:text/csv; charset:utf-8');
	header('Content-Disposition: attachment; filename=job-data.csv');
	$output= fopen("php://output", "w");
	fputcsv($output, array('Date','Time','Name','Phone','Address','Qualification','Post'));
	$query= "SELECT date, time, name, phone, address, qualification, post FROM job $datee";
	$resul=mysqli_query($conn,$query);
	while ($ro= mysqli_fetch_assoc($resul)) {
		fputcsv($output,$ro);
	}
	fclose($output);
	
}
?>