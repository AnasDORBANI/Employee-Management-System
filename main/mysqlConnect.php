<!-- block access if not sign in -->
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    /* define login constants */
    define('host', "localhost");
    define('user', "root");
    define('pass', "");
    define('bd', "GRH");
    $con = mysqli_connect(host,user,pass,bd);
    /* return to the login page if not connect */
    if($con == FALSE){
        header("location: login.html");
    }
?>