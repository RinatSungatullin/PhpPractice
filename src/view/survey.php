<?php

if ($_SESSION['authorized'] !== true || !isset($_SESSION['authorized'])) {
    header('Location: index.php?route=login');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        
    
    <div class="container col-4">
        <form>
            <div class="form-group mb-3">
                <label for="fullNameInput">Full name</label>
                <input type="text" name="full_name" id="fullNameInput" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="emailInput">Email</label>
                <input type="text" name="email" id="emailInput" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="phoneNumberInput">Phone Number</label>
                <input type="text" name="phone_number" id="phoneNumberInput" class="form-control">
            </div>
            <label for="experience">Experience</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="experience" id="experience1" value="yes" checked>
                <label class="form-check-label" for="experience1">
                    yes
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="experience" id="experience2" value="no">
                <label class="form-check-label" for="experience2">
                    no
                </label>
            </div>
            <div class="form-group mb-3">
                <label for="inputState">Programming language</label>
                <select id="inputState" class="form-control">
                    <option value="">Select language</option>
                    <option value="Java">Java</option>
                    <option value="PHP">PHP</option>
                    <option value="C">C</option>
                    <option value="C#">C#</option>
                    <option value="C++">C++</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="additionalInfo">Additional information</label>
                <textarea name="additional_information" class="form-control" id="additionalInfo" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- <form method="POST" class="form-control p-4 rounded-3"  action="index.php?route=survey">
                    <label>Email</label><br>
                    <input type="text" name="email" value="test@gmail.com"><br>
                    <label>Phone number</label><br>
                    <input type="text" name="phone_number" value="+79998881212"><br>
                    <label>Experience</label><br>
                    <label>Yes</label>
                    <input type="radio" name="experience" value="Yes"><br>
                    <label>No</label>
                    <input type="radio" name="experience" value="No"><br>
                    <label>Language</label><br>
                    <select name="language">
                        <option value="Java">Java</option>
                        <option value="">Select language</option>

                        <option value="PHP">PHP</option>
                        <option value="C">C</option>
                        <option value="C#">C#</option>
                        <option value="C++">C++</option>
                    </select><br>
                    <label>Additional information</label><br>
                    <textarea id="additional_information" class="text" name="additional_information"></textarea><br>
                    <input type="submit" value="Submit">
                </form> -->

        <!-- <form method="POST" action="index.php?route=logout">
                    <input type="submit" value="logout">
                </form> -->
    </div>
    </div>
    
</body>

</html>