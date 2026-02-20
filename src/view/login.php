<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST", action="index.php?route=login">
        <input type="text" placeholder="Login" name="login">
        <input type="password" placeholder="Password" name="password">
        <input type="submit", value="Sign in">
    </form>
</body>
</html> -->

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
    <!-- <div class="container">
        <div class="form-group row">
            <form method="POST" class="form-control" action="index.php?route=login">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-3" placeholder="Login" name="login">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="password" class="form-control mb-3" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
        </div>
        
    </div> -->
    
    <div class="container">
        <div class="form-group row">
            <form method="POST" class="form-control" action="index.php?route=login">
                <div class="col-sm-10 col align-self-center">
                    <input type="text" class="form-control mb-3" placeholder="Login" name="login">
                </div>
                <div class="col-sm-10">
                    <input type="password" class="form-control mb-3" placeholder="Password" name="password">
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
        </form>
        </div>
        
    </div>

</body>

</html>