<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    include 'mysqlConnect.php';
    $nom = $_GET["lName"];
    $prenom = $_GET["fName"];
    $sexe = $_GET["sexe"];
    $adresse = $_GET["adresse"];
    $dateNaissance = $_GET["bDay"];
    $numServ = $_GET["service"];
    $query = "INSERT INTO Employes (nom, prenom, sexe, adresse, dateNaissance, numServ) VALUES ('$nom','$prenom','$sexe','$adresse','$dateNaissance','$numServ')";
    mysqli_query($con,$query);
    mysqli_close($con);
    header('Location: allEmpls.php');
?>