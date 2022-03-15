<!-- block access if not sign in -->
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>

<?php
    /* stop session */
    session_start();
    session_unset();
    session_destroy();
    /* redirecting to the login page */
    header('location: login.html');
?>