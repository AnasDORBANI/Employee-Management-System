<!-- block access if not sign in -->
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>

<?php
    /* connect to database */
    include 'mysqlConnect.php';
    /* get employee code */
    $code = $_POST['code'];
    /* delete employee selected */
    $query = "DELETE FROM Employes WHERE code = '$code'";
    mysqli_query($con,$query);
    mysqli_close($con);
    /* return to the main page after insert */
    header('Location: allEmpls.php');
?>