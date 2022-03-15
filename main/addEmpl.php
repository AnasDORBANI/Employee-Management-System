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
    /* get information of the employee */
    $nom = $_GET["lName"];
    $prenom = $_GET["fName"];
    $sexe = $_GET["sexe"];
    $adresse = $_GET["adresse"];
    $dateNaissance = $_GET["bDay"];
    $numServ = $_GET["service"];
    $query = "INSERT INTO Employes (nom, prenom, sexe, adresse, dateNaissance, numServ) VALUES ('$nom','$prenom','$sexe','$adresse','$dateNaissance','$numServ')";
    mysqli_query($con,$query);
    mysqli_close($con);
    /* return to the main page after insert */
    header('Location: allEmpls.php');
?>