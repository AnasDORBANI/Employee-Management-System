<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="formAddEmpl.css">
    <script src="https://kit.fontawesome.com/520e6a99a0.js" crossorigin="anonymous"></script>
</head>

<body>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>