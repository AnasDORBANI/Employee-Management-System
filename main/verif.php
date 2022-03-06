<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    include "mysqlConnect.php";
    $user = $_POST['user'];
    $password = hash('md5',$_POST['password']);
    $query = "SELECT count(*) AS exist FROM Users WHERE login='$user' and password='$password'";
    $count = mysqli_query($con,$query);
    if(mysqli_fetch_assoc($count)['exist'] == 0){
        header('Location: ./index.php');
    } else {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: allEmpls.php');
    }
    mysqli_close();

?>