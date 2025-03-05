<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;700&display=swap" 
        rel="stylesheet">
        <link rel = "stylesheet" href = "css/styleLogin.css">
        <title>Medical Records</title>
    </head>

    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" and $_POST["num"] != ""){
            echo "Records matching provided health number with your name:";
            echo "<table>";
            echo "<tr>";
            echo    "<th>Report Number|</th>";
            echo    "<th>Patient Name|</th>";
            echo    "<th>Summary</th>";
            echo "</tr>";
            session_start();
            $con = mysqli_connect("localhost", "root", "123456", "471");
            if(mysqli_connect_errno()){
                echo "Failed to connect to my sql: " .mysqli_connect_error();
            }
            $sql = $con->prepare("SELECT * FROM record_table WHERE patient_fname=? AND patient_lname=? AND  patient_num=?");
            $sql->bind_param("sss", $_SESSION["fname"],$_SESSION["lname"],$_POST["num"]);
            $sql->execute();
            $result = $sql->get_result();
            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    echo "<tr><td>" . $row["Report_no"] . "</td><td>" . $row["patient_fname"]  . "</td><td>" . $row["report_summary"] . "</td><td>";
                }
            }
            else{
                echo "You do not have any Medical Reports";
            }
            $con -> close();
            echo "</table>";
        }
        else
        {
        echo
        "<form action=\"view_medical_record.php\" method=\"post\">
        Please Confirm Alberta Health Number: <input type=\"text\" name=\"num\"><br>
        <input type=\"submit\" value=\"Show Records\">
        </form>";
        }
        ?>
    <div class= "center"> 
        <button type="button" onclick="window.location.href='patient_select.php'">Return to Selection</button>
    </div>
</body>

</html>