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

<body>
    <main>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="not_cyberhax.png" style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">NotCyberhax Admin Vault</h4>
                                        </div>

                                        <form method="post" action="login.php">
                                            <p>Please login to access the vault</p>

                                            <?php if (isset($_GET["error"]) && $_GET["error"] == "invalid-credentials") { ?>
                                                <div class="alert alert-danger" role="alert">Invalid credentials.</div>
                                            <?php } ?>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="username-input" class="form-control" placeholder="USERNAME" name="username" />
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="password-input" class="form-control" placeholder="PASSWORD" name="password" />
                                            </div>

                                            <div class="text-center pt-1 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1" style="width: 100%;">
                                                <a class="text-muted" id="forgot-password" href="#">Forgot password?</a>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Don't have an account?</p>
                                                <button type="button" class="btn btn-outline-danger" id="new-account">Create new</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">We are NotCyberhax</h4>
                                        <p class="small mb-0">Our portal looks good, but lacks security and privacy.
                                            Well, we deserve it if we get hacked :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        let forgot_password = document.getElementById("forgot-password");
        forgot_password.addEventListener("click", () => alert("Sucks to be you >:)"), false);

        let new_account = document.getElementById("new-account");
        new_account.addEventListener("click", () => alert("Contact admin to create an account."), false);
    </script>
</body>

</html>