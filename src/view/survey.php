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
    <title>Survey form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid vh-100 d-flex flex-column">

        <div class="row bg-info">
            <div class="col-12 d-flex justify-content-end gap-2 py-2">
                <form method="POST" action="index.php?route=logout">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>

                <form>
                    <button type="submit" class="btn btn-danger">Reset results</button>
                </form>
            </div>
        </div>

        <div class="row flex-fill d-flex justify-content-center align-items-center">
            <div class="col-4">

                <form method="POST" action="index.php?route=survey">
                    <?php $isDisabled = !empty($survey); ?>
                    <fieldset <?= $isDisabled ? 'disabled' : '' ?>>
                    
                    <div class="form-group mb-3">
                        <label for="fullNameInput">Full name</label>
                        <input type="text"
                            name="full_name"
                            id="fullNameInput"
                            class="form-control"
                            value="<?= htmlspecialchars($survey->full_name ?? '') ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="emailInput">Email</label>
                        <input
                            type="text"
                            name="email"
                            id="emailInput"
                            class="form-control"
                            value="<?= htmlspecialchars($survey->email ?? '') ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phoneNumberInput">Phone Number</label>
                        <input type="text"
                            name="phone_number"
                            id="phoneNumberInput"
                            class="form-control"
                            value="<?= htmlspecialchars($survey->phone_number ?? '') ?>">
                    </div>
                    <label for="experience">Experience</label>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="experience"
                            id="experience1" value="yes">
                        <label class="form-check-label" for="experience1">
                            yes
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input
                            class="form-check-input"
                            type="radio" name="experience"
                            id="experience2" value="no"
                            <?= ($survey->experience ?? '') === 'no' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="experience2">
                            no
                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputState">Programming language</label>
                        <select id="inputState" class="form-control" name="language">
                            <option value="PHP" <?= ($survey->language ?? '') === 'PHP' ? 'selected' : '' ?>>PHP</option>
                            <option value="Java" <?= ($survey->language ?? '') === 'Java' ? 'selected' : '' ?>>Java</option>
                            <option value="C#" <?= ($survey->language ?? '') === 'C#' ? 'selected' : '' ?>>C#</option>
                            <option value="C++" <?= ($survey->language ?? '') === 'C++' ? 'selected' : '' ?>>C++</option>
                            <option value="C" <?= ($survey->language ?? '') === 'C' ? 'selected' : '' ?>>C</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="additionalInfo">Additional information (max 255 symbols)</label>
                        <textarea name="additional_information" class="form-control" id="additionalInfo" rows="3"><?= htmlspecialchars($survey->additional_info ?? '') ?></textarea>
                    </div>
                    <small class="form-text mb-3">
                        <p class="text-danger">
                            <?php
                            if (!empty($error))
                                echo $error;
                            ?>
                        </p>
                    </small>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>