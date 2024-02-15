<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents ..</title>
    <link rel="icon" href="assets/hierarchy.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-3 p-3 mt-3">
            <a class="navbar-brand" href="#">
                <img src="assets/hierarchy.svg" height="30" alt="Cyberhax logo" style="filter: invert(1)">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="?p=home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
        $p = 'home.php';
        if (isset($_GET['p']))
            $p = $_GET['p'];
        include($p);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>