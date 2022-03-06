<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    session_start();
    session_unset();
    session_destroy();
    header('location: login.html');
?>