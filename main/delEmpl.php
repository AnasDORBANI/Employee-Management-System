<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    include 'mysqlConnect.php';
    $code = $_POST['code'];
    echo $code;
    $query = "DELETE FROM Employes WHERE code = '$code'";
    mysqli_query($con,$query);
    header('Location: allEmpls.php');
?>