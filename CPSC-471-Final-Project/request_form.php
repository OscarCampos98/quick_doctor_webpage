<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" href = "css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;700&display=swap" 
      rel="stylesheet">
    <link rel = "stylesheet" href = "css/styleLogin.css">
    <title>Sumbit Request Form</title>
</head>
<body>

<img src ="images/logo.png" alt="logo" class="logo">

<div class = 'center'>
<form action="waittimeslip.php" method="post">
    <div class ="input_field">
        Symtoms: <br><textarea name="symtoms" cols = "30" rows = "20"></textarea><br>
        Symtom Severity: <select name="severity">   
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
        </div>
        <div class ="input_field">
            Your Community: <select name="community">
            <option value="Banff Trail">Banff Trail</option>
            <option value="Montgomery">Montgomery</option>
            <option value="St. Andrew's Heights">St. Andrew's Heights</option>
            <option value="Parkdale">Parkdale</option>
            <option value="West Willhurst">West Willhurst</option>
            <option value="Taradale">Taradale</option>
            <option value="Kingsland">Kingsland</option>
            <option value="Bankview">Bankview</option>
        </select><br>
        </div>
        
        <input type="submit" value="Submit">
</form>
</div>
    
</body>
</html>