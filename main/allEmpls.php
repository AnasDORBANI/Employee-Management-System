<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
    include "header.php"
?>
<button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
</button>
<section class="mt-5">


    <h1 class="text-center p-5">Liste des employees</h1>
    <div class="container-sm table-responsive p-5 position-relative">
        <button class="btn btn-success position-absolute end-0 top-0 me-5" data-bs-toggle="modal"
            data-bs-target="#addForm"><i class="bi bi-person-plus-fill"></i> Ajouter employee</button>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th>Date de naissance</th>
                    <th>adresse</th>
                    <th>Service</th>
                    <td>Edit</td>
                    <td>remove</td>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                include "selectEmpls.php";
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <?php 
        include "addForm.php";
    ?>
</section>
<?php
    include "footer.php"
?>