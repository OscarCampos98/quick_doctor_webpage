<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userfound = false;
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $connection = mysqli_connect("localhost", "root", "123456", "471");
    $query = $connection->prepare("SELECT * FROM patients WHERE email=? AND password=?");
    $query->bind_param("ss", $email, $password);    
    $query->execute();
    $result = $query->get_result();
    $pcount = mysqli_num_rows($result);

    if($pcount > 0){
        session_start();
        $userfound = true;
        $userData = $result->fetch_array();
        $_SESSION["doctorflag"] = 0;
        $_SESSION["fname"] = $userData[1];
        $_SESSION["lname"] = $userData[2];
        $_SESSION["email"] = $userData[3];
        $_SESSION["address"] = $userData[4];
        header("Location: patient_select.php");
    }

    $query = $connection->prepare("SELECT * FROM doctors WHERE email=? AND password=?");
    $query->bind_param("ss", $email, $password);
    $query->execute();
    $result = $query->get_result();
    $dcount = mysqli_num_rows($result);

    if($dcount > 0 and $userfound == false){
        $userfound = true;
        session_start();
            $userData = $result->fetch_array();
            $_SESSION["doctorflag"] = 1;
            $_SESSION["fname"] = $userData[1];
            $_SESSION["lname"] = $userData[2];
            $_SESSION["email"] = $userData[3];
            $_SESSION["address"] = $userData[4];
            header("Location: doctor_upload.php");
        }
    if ($userfound == false)
        header("Location: home.php");
    mysqli_close($connection);
}
?>