<?php

// session_start();

// if(!isset($_SESSION['username'])){
//     header('location:login.php');
// }

?>


<html>
<head>
    <title>Home</title>
    <link rel = "stylesheet" type = "text/css" href = "homeStyle.css">
    <link rel = "stylesheet" type = "text/css" href = "poppping.css">
    <script defer src="poping.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <h2 class = "logo-link"><a href="home.php">E<span>Injera</span></a></h2>
            <ul>
                <li><a href="lists.html">Lists</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </div>
    
    <div>

    

    </div>
    <div class="container">
        <form class = "search-bar" action="" method = "post">
            <input type="text" placeholder = "Search Injera Delivery Here" name = 'q'>
            <button type = "submit" name = "submit" id = "show-popup-btn"><img src="images/search.png" alt=""></button>
        </form>
    </div>

    <?php


$con = new PDO("mysql:host=localhost;dbname=register", 'root', '');

if(isset($_POST["submit"])) {
    $str = $_POST["q"];
    $sth = $con->prepare("SELECT * FROM `info` WHERE CompName = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>

        
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <script defer src="script.js"></script>
</head>
<body>
  <div class="modal active" id="modal">
    <div class="modal-header">
      <div class="title" style = "color: orange"><?php echo $row->CompName; ?></div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
            <p style = "color: grey"><?php echo $row->Description; ?></p>
            <Address style = "color: orange"><?php echo $row->Address; ?></Address>
            <p style = "color: black"><?php echo $row->Price; ?></p>
            <small style = "color: black"><?php echo $row->Delivery; ?></small>
    </div>
  </div>
  <div id="overlay"></div>
</body>
</html>
        

        <?php
    }
    
    else {
        echo '<script type="text/javascript">
        window.location.href = "home.php";
        alert("This company hasn\'t registered with us yet");
        
        </script>';
    }


}


?>

    
    
</body>
</html>


