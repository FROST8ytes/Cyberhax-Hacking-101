<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotCyberhax Admin Vault</title>
    <link rel="icon" type="image/x-icon" href="favicons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="not_cyberhax.png" alt="Logo" height="24" class="d-inline-block align-text-top">
                NotCyberhax
            </a>
        </div>
    </nav>

    <main>
        <?php
            if (isset($_SESSION["login_success"]) && $_SESSION["login_success"] == true) {
        ?>
            <h1>Welcome back, Admin!</h1>
            <p>As of January 2024, we have taken down all features and information stored in this vault as we have moved to a new vault system.</p>
            <p>However, we left this for you as it seems to be important.</p>
            <code>Cyberhax{41w4y5_u53_g00d_p455w0rd}</code>
        <?php
            session_destroy();
            } else {
        ?>
            <div class="alert alert-danger" role="alert">Access forbidden. Please login to continue.</div>
        <?php } ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>