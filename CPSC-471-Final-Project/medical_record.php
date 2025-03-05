<?php
header("Location: doctor_upload.php");
$patient_fname = $_POST["patient_fname"];
$patient_lname = $_POST["patient_lname"];
$patient_age = $_POST["patient_age"];
$patient_num = $_POST["patient_num"];
$doctor_name = $_POST["doctor_name"];
$report_summary = $_POST["report_summary"];


// Create connection
$con=mysqli_connect("localhost","root","123456","471");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = $con->prepare("INSERT INTO record_table (patient_fname, patient_lname,patient_age, patient_num, doctor_name, report_summary) VALUES (?,?,?,?,?,?)");
$sql->bind_param("ssssss", $patient_fname,$patient_lname,$patient_age,$patient_num ,$doctor_name,$report_summary);
$sql->execute();

mysqli_close($con);
?>
