<?php

if (isset($_SESSION['authorized'])) {
    if ($_SESSION['authorized'] === true || isset($_SESSION['authorized'])) {
    header('Location: index.php?route=survey');
    exit;
}
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 vh-100 d-flex align-items-center text-center">
                <form method="POST" class="form-control p-4 rounded-3" action="index.php?route=login">
                    <div class="mx-auto col align-self-center ">
                        <label class="fs-3 mb-3">Authorization</label>
                    </div>
                    <div class="mx-auto col align-self-center">
                        <input type="text" class="form-control mb-3" placeholder="Login" name="login">
                    </div>
                    <div class="mx-auto">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <small class="form-text mb-3">
                            <p class="text-danger">
                                <?php if (!empty($error))
                                echo $error;
                                ?>
                            </p>
                        </small>
                    </div>

                    <div class="mx-auto">
                        <button type="submit" class="btn btn-primary w-100 mb-1 btn-sm rounded-4">Sign in</button>
                    </div>
                    <div class="mx-auto">
                        <a href="index.php?route=register" class="btn btn-primary btn-success btn-sm w-100 rounded-4">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>