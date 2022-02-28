<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.php");
    }
?>
<div class="modal fade" id="addForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body position-relative">
                <button type="button" class="btn-close position-absolute end-0 top-0 p-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <form class="rounded-3 container" method="get" action="addEmpl.php">
                    <h2>Add Employee</h2>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <div class="box-container row px-2 gap-3">
                            <input class="form-control d-inline-block col inline" type="text" placeholder="First Name"
                                name="fName" required>
                            <input class="form-control d-inline-block col inline" type="text" placeholder="Last Name"
                                name="lName" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sexe</label>
                        <div class="sexe_container d-flex justify-content-around">
                            <div class="form-check d-inline-block">
                                <input class="form-check-input" type="radio" id="male" name="sexe" value="M" required>
                                <label for="form-check-label">Male</label>
                            </div>
                            <div class="form-check d-inline-block">
                                <input class="form-check-input" type="radio" id="female" name="sexe" value="F" required>
                                <label for="form-check-label">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Birthday</label>
                        <input class="form-control" type="date" class="date" name="bDay" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" placeholder="Enter Your Address" rows="4" name="adresse"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service</label>
                        <select class="form-select" name="service" placeholder="Select your service" required>
                            <option selected class="fw-bold" value="">Choose a service</option>
                            <option value="1">Vente</option>
                            <option value="2">Approvisionnement</option>
                            <option value="3">Reclamation</option>
                        </select>
                    </div>
                    <div class="mb-3 row px-3 gap-3">
                        <input class="btn btn-danger col clear" type="reset" value="clear">
                        <input class="btn btn-primary col submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>