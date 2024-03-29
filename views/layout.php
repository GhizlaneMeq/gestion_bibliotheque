<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>oop_mvc</title>
    <link rel="stylesheet" href="../../gestion_bibliotheque/public/css/login.css">


</head>

<body>
    <header>

    </header>
    <main class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo ' <div class="alert alert-primary alert-dismissible" role="alert" >
            ' . $_SESSION['message'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
            unset($_SESSION['message']);
        }
        ?>
        <?php
        include_once $page;
        ?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>