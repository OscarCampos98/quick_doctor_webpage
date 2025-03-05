<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;700&display=swap" 
      rel="stylesheet">
    <link rel = "stylesheet" href = "css/styleLogin.css">
    <title>Patient Selection</title>
</head>


<body>
    
<img src ="images/logo.png" alt="logo" class="logo">

<div class= "center">
    <h1>Welcome <?php echo $_SESSION["fname"]?></h1>

    <button type="button" onclick="window.location.href='view_medical_record.php'">View Medical Records</button> 
    <button type="button" onclick="window.location.href='request_form.php'">Create Request Slip</button>
    <button type="button" onclick="window.location.href='logout.php'">Log-Out</button>

</div>
</body>
</html>