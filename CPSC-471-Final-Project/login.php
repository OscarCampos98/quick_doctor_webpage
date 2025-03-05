<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;700&display=swap" 
      rel="stylesheet">
    <link rel = "stylesheet" href = "css/styleLogin.css">
    <title>Login</title>
</head>
<body>
<a href="home.php"><img src ="images/logo.png" alt="logo" class="logo" onclick="window.location.href='home.php' "></a>

<div class = 'center'>
    <h1>Log-In</h1>
    <form action="validatelogin.php" method="post">
        <div class="input_field">
            <input type="text" name="email"required> 
            <span></span>
            <label>E-Mail</label>
        </div>
        <div class = 'input_field'>
            <input type="password" name="pass" required>
            <label>Password</label>
            <span></span>
        </div>
        <input type="submit" value="login">
    <div class="Singup_link">
        Not a member? <a href="register.php">Signup</a>
    </div>
    </form>
</div>

 
</body>
</html>