<!-- block access if not sign in -->
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>

<!-- include navbar -->
<?php
    include "header.php";
?>
<!-- main section of employee's edit form -->
<div class="container" style="width:400px; margin-top:100px">
    <!-- edit form -->
    <form class="rounded-3 container" method="get" action="editEmpl.php">
        <h2>Edit Employee</h2>
        <!-- input that contain the code of the employee and select all employee details -->
        <?php
        /* get employee info */
            include "selectEmpl.php";
            echo '<input type="text" value="'.$_POST['code'].'" name="code" readonly="readonly" class="d-none">';
        ?>
        <!-- name section -->
        <div class="mb-3">
            <label class="form-label">Name</label>
            <div class="box-container row px-2 gap-3">
                <input class="form-control d-inline-block col inline" type="text" placeholder="First Name"
                    value="<?php echo $prenom ?>" name="fName">
                <input class="form-control d-inline-block col inline" type="text" placeholder="Last Name"
                    value="<?php echo $nom ?>" name="lName">
            </div>
        </div>
        <!-- sexe section -->
        <div class="mb-3">
            <label class="form-label">Sexe</label>
            <div class="sexe_container d-flex justify-content-around">
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" id="male" name="sexe" value="M"
                        <?php if($sexe == 'M'){echo 'checked';}?>>
                    <label for="form-check-label">Male</label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" id="female" name="sexe" value="F"
                        <?php if($sexe == 'F'){echo 'checked';}?>>
                    <label for="form-check-label">Female</label>
                </div>
            </div>
        </div>
        <!-- birthday section -->
        <div class="mb-3">
            <label class="form-label">Birthday</label>
            <input class="form-control" type="date" class="date" name="bDay" value="<?php echo $dateNaissance?>">
        </div>
        <!-- adress section -->
        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" placeholder="Enter Your Address" rows="4" name="adresse"
                value="<?php echo $adresse ?>"><?php echo $adresse?></textarea>
        </div>
        <!-- services section -->
        <div class="mb-3">
            <label class="form-label">Service</label>
            <select class="form-select" name="service" placeholder="Select your service">
                <option value="1" <?php if($numServ == '1'){echo 'selected';}?>>Vente</option>
                <option value="2" <?php if($numServ == '2'){echo 'selected';}?>>Approvisionnement</option>
                <option value="3" <?php if($numServ == '3'){echo 'selected';}?>>Reclamation</option>
            </select>
        </div>
        <div class="mb-3 row px-3 gap-3">
            <!-- return and submit buttons -->
            <button type="button" class="btn btn-danger col submit" data-bs-toggle="modal"
                data-bs-target="#cancel">Return</button>
            <button type="button" class="btn btn-primary col submit" data-bs-toggle="modal"
                data-bs-target="#edit">Submit</button>
            <!-- editing confirmation modal -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-info-circle-fill"></i>
                                Confirm Editing</h5>
                        </div>
                        <div class="modal-body">
                            Do you really want to edit the employee infos.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- return confirmation modal -->
            <form action="cancelEdit.php">
                <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-info-circle-fill"></i>
                                    Confirm return</h5>
                            </div>
                            <div class="modal-body">
                                Do you really want to cancel editing.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </form>
</div>

<!-- footer section -->
<?php
    include "footer.php";
?>