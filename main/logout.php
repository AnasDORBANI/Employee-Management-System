<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.php");
    }
?>
<?php
    session_start();
    session_unset();
    session_destroy();
    header('location: login.php');
?>