<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;700&display=swap" 
      rel="stylesheet">
    <link rel = "stylesheet" href = "css/styleLogin.css">
    <title>Doctor Upload</title>
</head>
<body>
	
<img src ="images/logo.png" alt="logo" class="logo">
	
	<div class= "center">
		<h1> Add a Medical Record<h1>	
		<button type="button" onclick="window.location.href='logout.php'">Log Out</button>
		<form action="medical_record.php" method="post">
			<div class ="input_field">	
				<input type= "text" name="patient_name" required>
				<label>patient Name</label>
			</div>
			<div class ="input_field">
				<input type="text" name="patient_age" required>
				<span></span>
				<label>Patient Age</label>
			</div>
			<div class ="input_field">
				<input type="text" name = "doctor_name"required>
				<span></span>
				<label>Doctor Name</label>
			</div>
			<div class ="input_field">
			Summary:	<textarea name="report_summary" cols = "30" rows = "20"></textarea>
			</div>
		<input type="submit" value="Submit Summary">
		</form>
	</div>
</body>
</html>