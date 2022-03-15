<!-- block access if not sign in -->
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
    /* include navbar  */
    include "header.php"
?>
<!-- main section of employee's table -->
<section class="mt-5">
    <h1 class="text-center p-5">Liste des employees</h1>
    <div class="container-sm table-responsive p-5 position-relative">
        <!-- add employee table -->
        <button class="btn btn-success position-absolute end-0 top-0 me-5" data-bs-toggle="modal"
            data-bs-target="#addForm"><i class="bi bi-person-plus-fill"></i> Ajouter employee</button>
        <!-- employee's table -->
        <table class="table table-bordered">
            <!-- head of table -->
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
            <!-- table body -->
            <tbody class="table-light">
                <!-- select all employees from the database -->
                <?php
                    include "selectEmpls.php";
                ?>
            </tbody>
        </table>
    </div>

    <!-- adding form(modal section)  -->
    <?php 
        include "addForm.php";
    ?>
</section>
<!-- footer section -->
<?php
    include "footer.php"
?>