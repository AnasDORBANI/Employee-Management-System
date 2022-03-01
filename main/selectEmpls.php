<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.php");
    }
?>
<?php
    include 'mysqlConnect.php';
    $query = "SELECT * FROM `Employes`";
    $employes = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($employes)) {
        echo '<tr>
                <td>'.$row["code"].'</td>
                <td>'.$row["nom"].'</td>
                <td>'.$row["prenom"].'</td>
                <td>'.$row["sexe"].'</td>
                <td>'.$row["adresse"].'</td>
                <td>'.$row["dateNaissance"].'</td>
                <td>'.$row["numServ"].'</td>
                <td>
                    <form action="editForm.php" method="post">
                        <input type="input" class="d-none" name ="code" readonly="readonly" value="'.$row["code"].'">
                        <button type="submit" class="btn btn-warning d-inline-block w-100" data-bs-toggle="modal"
                        data-bs-target="#editForm"><i class="bi bi-pencil-fill"></i>Edit</button>
                    </form>
                </td>
                <td>
                    <form action="delEmpl.php" method="post">
                        <input type="input" class="d-none" name ="code" readonly="readonly" value="'.$row["code"].'">
                        <button type="button" class="btn btn-danger d-inline-block w-100" data-bs-toggle="modal"
                        data-bs-target="#remove"><i class="bi bi-person-x-fill"></i>Remove</button>
                        <div class="modal fade" id="remove" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-exclamation-triangle-fill"></i> Confirm Delete</h5>
                                    </div>
                                    <div class="modal-body">
                                        This action will delete the employee definately.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>';
    }
?>