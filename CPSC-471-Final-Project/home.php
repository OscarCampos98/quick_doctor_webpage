<?php
//this will be the template of our website the main page
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title> .ChopMedical</title>
  <meta charset="utf-8">
  <!-- <meta name = "viewport" content="width=device-width, initial-scale = 1.0"> -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script type="module" src="./index.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">


</head>

<?php
//this will our navigation bar for the home page
?>

<body>

  <header>
    <div class="containers">

      <img src="images/logo.png" alt="logo" class="logo">
      <nav>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="register.php">Sign Up</a></li>
        </ul>
        <!-- <a href="case.php" class="header-case"> Cases</a> -->
      </nav>
    </div>
  </header>

  <div class="Info">
    <h2>Welcome</h2>
    <div class="website-InfoUse">
      <h3>How To Use:</h3>
      <p>Our website provides users with an easy way to book an appoiment by severity to the nearest Hospital.
        Please Log In or create an account to use our service. </P>
    </div>
  </div>


  <div class="mapContainer">
    <div id="map"></div>
    <p> Here is a GoogleMap with all the Hospital in the city</p>


    <div class=footer>
      <div class="col-1">
        <h5>USEFUL LINKS</h5>
        <a href="about.php">About</a>
      </div>
      <div class="col-2">
        <h5>COMMENTS</h5>
        <form>
          <input type="text" placeholder="Leave a comment" required>
          <br>
          <button type="submit">Thank You</button>
        </form>
      </div>
      <div class="col-3">
        <h5>CONTACT</h5>
        <p> 2500, University Dr Nw<br> Calgary, AB T2N1N4 </p>




</body>

<script></script>

</html>
<?php
//this will the footer where a person can live a comment to how we can inprove
// key was remove for security reasons
?>