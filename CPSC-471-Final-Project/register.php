<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;700&display=swap" 
    rel="stylesheet">
    <link rel = "stylesheet" href = "css/styleLogin.css">
</head>

<body>

<a href="home.php"><img src ="images/logo.png" alt="logo" class="logo" onclick="window.location.href='home.php' "></a>
<div class = 'center'>
    <h1>Sign Up</h1>
    <form action="register.php" method="post">
        <div class="Options">
            Role:   <select name="dropdown">
                <option value="patient">Patient</option>
                <option value="doctor">Doctor</option>
            </select>

        </div>
        <div class="input_field"> 
            <input type="text" name="fname" required>
            <span></span>
            <label>First Name</label>
        </div>
        <div class="input_field">    
            <input type="text" name="lname" required>
            <span></span>
            <label>Last Name</label>
        </div>
        <div class="input_field">    
            <input type="text" name="email" required>
            <span></span>
            <label>E-mail</label>
        </div>
        <div class="input_field"> 
            <input type="text" name="address" required>
            <span></span>
            <label>Address</label>
        </div>
        <div class="input_field" >   
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
        </div>

        <input type="submit" value="Register">
    </div>
	
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $docOrPatient = $_POST["dropdown"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $password = $_POST["password"];

        $connection = mysqli_connect("localhost", "root", "123456", "471");
        if(mysqli_errno($connection)){
            echo "Failed to connect to SQL.";
            die();
        }

        if($docOrPatient == "patient"){
        $query = $connection->prepare("INSERT INTO patients (fname,lname,email,address,password) VALUES (?, ?, ?, ?, ?)");
        $query->bind_param("sssss", $fname, $lname, $email, $address, $password);
        $query->execute();
    }
        else
        {
            $query = $connection->prepare("INSERT INTO doctors (fname,lname,email,address,password) VALUES (?, ?, ?, ?, ?)");
        $query->bind_param("sssss", $fname, $lname, $email, $address, $password);
        $query->execute();
        }



    header("Location: login.php");
    mysqli_close($connection);
}



?>
    
</body>
</html>