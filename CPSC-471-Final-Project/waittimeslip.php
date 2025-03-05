<?php

function calcDistance($long1, $lat1, $long2, $lat2) {
    /*
        - Function to calculate distance between a pair of longitude and latitude coordinates.  
        -Source: https://stackoverflow.com/questions/27928/calculate-distance-between-two-latitude-longitude-points-haversine-formula
    */
    $R = 6371;
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($long2 - $long1);
    $a =
        sin($dLat / 2) * sin($dLat / 2) +
        cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
        sin($dLon / 2) * sin($dLon / 2);
    $b = 2 * atan2(sqrt($a), sqrt(1-$a));
    $distance = $R * $b;
    return $distance; 
}

$hospital = "";
$distance = 99999999999999;

$connection = mysqli_connect("localhost", "root", "123456", "471");
$query = $connection->prepare("SELECT * FROM communities WHERE community_name=?");
$query->bind_param("s",$_POST["community"]);
$query->execute();
$result = $query->get_result();

$community_tuple = $result->fetch_array();
$communitylong = $community_tuple[1];
$communitylat = $community_tuple[2];

$query = "SELECT * FROM hospital_locations";
$result = mysqli_query($connection, $query);

while($tuple = $result->fetch_array()){
    if(calcDistance($communitylong, $communitylat, $tuple[1], $tuple[2]) <= $distance){
        $distance = calcDistance($communitylong, $communitylat, $tuple[1], $tuple[2]);
        $hospital = $tuple[0];
    }
}

if ($_POST["severity"] < 4)
    $queuemsg = "You have been placed in the low priority queue.";
else if($_POST["severity"] <= 6)
    $queuemsg = "You have been placed in the medium priority queue.";
else{
    $queuemsg = "You have been placed in the high priority queue.";
}
?>

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
    <title>Placed In Queue</title>
</head>
<body>
    <img src ="images/logo.png" alt="logo" class="logo">        
    <div class= "center">
        <p style="text-align: center;">
        <?php
        echo "Your closest hospital is: " . $hospital . ".";?>
        <br>
        <?php
        echo $queuemsg;?>
        </p>
    <button type="button" onclick="window.location.href='patient_select.php'">Return to Selection</button> 
    </div>


</body>
</html>