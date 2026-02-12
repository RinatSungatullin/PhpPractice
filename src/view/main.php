<?php

if (!$_SESSION['authorized']) {
    header('Location: index.php?route=login');
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
    survey
    <form method="POST" action="index.php?route=logout",>
        <input type="submit" value="logout">
    </form>
</body>
</html>