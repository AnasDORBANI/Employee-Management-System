<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    include 'mysqlConnect.php';
    $code=$_GET["code"];
    $nom = $_GET["lName"];
    $prenom = $_GET["fName"];
    $sexe = $_GET["sexe"];
    $adresse = $_GET["adresse"];
    $dateNaissance = $_GET["bDay"];
    $numServ = $_GET["service"];
    echo $code;
    $query = "UPDATE Employes SET nom='$nom', prenom='$prenom', sexe='$sexe', adresse='$adresse', dateNaissance='$dateNaissance', numServ='$numServ' WHERE code='$code'";
    echo $query;
    mysqli_query($con,$query);
    mysqli_close($con);
    header('Location: allEmpls.php');
?>