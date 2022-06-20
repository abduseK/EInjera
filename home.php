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

        
        <div style = "
             background-image: linear-gradient(rgba(0,8,51,0.9), rgba(0,8,51,0.9)), url(images/injera.jpg);
             background-size: cover;
             background-position: center;
             padding: 50px;

        
        
        ">
            <h2 style = "color: orange"><?php echo $row->CompName; ?></h2>
            <p style = "color: grey"><?php echo $row->Description; ?></p>
            <Address style = "color: orange"><?php echo $row->Address; ?></Address>
            <p style = "color: white"><?php echo $row->Price; ?></p>
            <small style = "color: white"><?php echo $row->Delivery; ?></small>
        </div>
        

        <?php
    }
    
    // else {
    //     echo "This company doesn't exist";
    // }


}


?>

    
    
</body>
</html>


