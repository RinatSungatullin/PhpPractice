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
</head>

<body>

    <form method="POST" action="index.php?route=survey">
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
    </form>

    <form method="POST" action="index.php?route=logout">
        <input type="submit" value="logout">
    </form>
</body>

</html>