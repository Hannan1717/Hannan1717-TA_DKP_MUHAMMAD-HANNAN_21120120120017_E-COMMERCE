<?php
include("user.php");

session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->

    <title>Sneakers</title>
</head>

<body style="overflow-x: hidden;">
    <div class="container">

        <div class="row mx-0">
            <div class="card card-tengah border-primary p-0" style="width: 30rem;">
                <div class="containerku">
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1518362165686-c587a1de1003?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" style="width: 478px;height: 150px; object-fit: cover;object-position:0% 70%; filter: brightness(75%);">
                    <h3 class="text1">Log In</h3>
                </div>
                <div class="card-body">
                    <!-- Form -->
                    <form action="" method="POST">
                        <div class="mb-2">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark">Log In</button>
                    </form>
                    <!-- END Form -->
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        $user = new datax($_SESSION['email'], $_SESSION['password']);
        $getUser = $user->login();
        if ($getUser) {
            header("Location: http://localhost/Tugas%20Akhir%20S2%20dkp/main.php");
        } else {
            header("Location: http://localhost/Tugas%20Akhir%20S2%20dkp/failed login.php");
        }
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>