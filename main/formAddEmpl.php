<!-- block access if not sign in -->
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>

<div class="container-md w-25 vh-100 d-flex align-items-center justify-content-center">
    <form class="bg-light p-5 rounded-3 container">
        <h2>Add Employee</h2>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <div class="box-container row px-2 gap-3">
                <input class="form-control d-inline-block col inline" type="text" placeholder="First Name" name="fName">
                <input class="form-control d-inline-block col inline" type="text" placeholder="Last Name" name="lName">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">genre</label>
            <div class="genre_container d-flex justify-content-around">
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" id="male" name="genre">
                    <label for="form-check-label">Male</label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" id="female" name="genre">
                    <label for="form-check-label">Female</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Birthday</label>
            <input class="form-control" type="date" class="date" name="bDay">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" placeholder="Enter Your Address" rows="4" name="address"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Service</label>
            <select class="form-select" name="service" placeholder="Select your service">
                <option selected>Choose a service</option>
                <option value="1">one</option>
                <option value="2">two</option>
                <option value="3">three</option>
                <option value="4">four</option>
                <option value="5">five</option>
            </select>
        </div>
        <div class="mb-3 row px-3 gap-3">
            <input class="btn btn-danger col clear" type="reset" value="clear">
            <input class="btn btn-primary col submit" type="submit" value="Submit">
        </div>
    </form>
</div>