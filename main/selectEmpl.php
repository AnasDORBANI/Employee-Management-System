<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<?php
    include 'mysqlConnect.php';
    $query = "SELECT * FROM `Employes` where code='".$_POST["code"]."'";
    $employe = mysqli_query($con,$query);
    $employe = mysqli_fetch_assoc($employe);
    $code = $employe["code"];
    $nom = $employe["nom"];
    $prenom = $employe["prenom"];
    $sexe = $employe["sexe"];
    $adresse = $employe["adresse"];
    $dateNaissance = $employe["dateNaissance"];
    $numServ = $employe["numServ"];
?>