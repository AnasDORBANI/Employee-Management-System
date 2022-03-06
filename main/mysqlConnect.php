<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "GRH";
    $con = mysqli_connect($host,$user,$pass,$bd);
    if($con == FALSE){
        echo "la connexion a echouee";
    }
?>