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
    /* get edited informations of the employee */
    $code=$_GET["code"];
    $nom = $_GET["lName"];
    $prenom = $_GET["fName"];
    $sexe = $_GET["sexe"];
    $adresse = $_GET["adresse"];
    $dateNaissance = $_GET["bDay"];
    $numServ = $_GET["service"];
    /* update employee's informations */
    $query = "UPDATE Employes SET nom='$nom', prenom='$prenom', sexe='$sexe', adresse='$adresse', dateNaissance='$dateNaissance', numServ='$numServ' WHERE code='$code'";
    mysqli_query($con,$query);
    mysqli_close($con);
    /* return to the main page after insert */
    header('Location: allEmpls.php');
?>