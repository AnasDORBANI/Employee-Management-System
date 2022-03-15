<!-- block access if not sign in -->
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    /* connect to database */
    include "mysqlConnect.php";
    $user = $_POST['user'];
    /* hashing password */
    $password = hash('md5',$_POST['password']);
    $query = "SELECT count(*) AS exist FROM Users WHERE login='$user' and password='$password'";
    $count = mysqli_query($con,$query);
    /*check login and password */
    if(mysqli_fetch_assoc($count)['exist'] == 0){
        header('Location: login.html');
    } else {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: allEmpls.php');
    }
    mysqli_close();

?>