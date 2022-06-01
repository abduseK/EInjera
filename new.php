
<html lang="en">
<head>
    <title>Home</title>
    <style>

        body {
            color: linear-gradient(rgba(0,8,51,0.9), rgba(0,8,51,0.9));

        }
        .boxContainer{
            margin: auto;
            margin-top: 25%;
            position: relative;
            width: 300px;
            height: 42px;
            border: 4px solid #2980b9;
            padding: 0px 10px;
            border-radius: 50px;
        }

        .elementContainer{
            width:100%;
            height: 100%;
            vertical-align: middle;
        }
        .search{
            border: none;
            height: 100%;
            width: 100%;
            padding: 0px;
            border-radius: 50px;
            font-size: 18px;
            color: #424242;
        }

        .search:focus{
            outline: none;
        }
    </style>
</head>
<body>
    <div class="boxContainer">
        <table class = "elementContainer">
            <tr>
            <form action="" method = "post" >
                    <input type="text" class = "search" placeholder = "search" name = "search">
                    <input type="submit" name = "submit">
                </form>
            

            </tr>
        </table>
                
    </div>
    
</body>
</html>



<?php


$con = new PDO("mysql:host=localhost;dbname=register", 'root', '');

if(isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `info` WHERE CompName = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>

        <br><br><br>
        
        <div id="popup-container" style = "
            background-image: linear-gradient(rgba(0,8,51,0.9), rgba(0,8,51,0.9));
        
        ">
            <div id="close-btn-container">
                <span id = "close-btn">Close</span>
            </div>
            <h2><?php echo $row->CompName; ?></h2>
            <p><?php echo $row->Description; ?></p>
            <Address><?php echo $row->Address; ?></Address>
            <p><?php echo $row->Price; ?></p>
            <small><?php echo $row->Delivery; ?></small>
        </div>


        <script type = "text/javascript">
            $(document).ready(function()
            {
                // show popup
                $("#show-popup-btn").click(function(){
                    $("#popup-container").show();
                })
                // close popup
                $("#close-btn").click(function(){
                    $("#popup-container").hide();
                })
            })
        </script>
        

        <?php
    }
    
    else {
        echo "This company doesn't exist";
    }


}


?>
