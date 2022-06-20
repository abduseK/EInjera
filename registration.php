<?php

session_start();
//header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'register');

$name = $_POST['user'];
$pass = $_POST['password'];
$mail = $_POST['email'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo '<script type="text/javascript">
    window.location.href = "login.php";
    alert("Username is already taken");
    
    </script>';
}
else{
    $reg = "insert into usertable(email, name, password) values ('$email', '$name', '$pass')";
    mysqli_query($con, $reg);
    echo '<script type="text/javascript">
    window.location.href = "login.php";
    alert("Regisered Successfully");
    
    </script>';
}

?>