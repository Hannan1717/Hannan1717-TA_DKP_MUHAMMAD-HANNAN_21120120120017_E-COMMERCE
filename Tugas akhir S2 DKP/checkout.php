<?php
include("user.php");
session_start();


$user = new datax($_SESSION['email'], $_SESSION['password']);
$getUser = $user->login();
if ($getUser) { ?>

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
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">

        <title>Checkout</title>
    </head>

    <body style="overflow-x: hidden;">
        <!-- Navbar -->
        <?php
        $username = $getUser->username;
        $emailuser = $getUser->email;

        navbartop($username, $emailuser);
        ?>
        <!-- end Navbar -->
        <div class="container">
            <!-- Judul -->
            <div class="row mt-2">
                <div class="col">
                    <h1 class="text-center">CHECKOUT</h1>
                </div>
            </div>
            <!-- end Judul -->
            <div class="row">
                <div class="card card-tengah2 border-primary p-0 mt-1 mb-4" style="width: 30rem;">
                    <div class="containerku">
                        <img class="card-img-top mt-2" src="<?= $_POST['img'] ?>" style="width: 478px;height: 150px; object-fit: contain;">
                    </div>
                    <div class="card-body">
                        <p class="card-title fs-3 m-0"><?= $_POST['nama'] ?></p>
                        <h4 class="card-text mb-3">$<?= $_POST['price'] ?></h4>
                        <!-- Form -->
                        <form action="succes.php" method="POST" class="row g-3">
                            <div class="col-12">
                                <label for="inputState" class="form-label">Size</label>
                                <select name="size" class="form-select" aria-label="Default select example">
                                    <?php if ($_POST['kategori'] == "sneakers") { ?>
                                        <option selected>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                    <?php
                                    } else { ?>
                                        <option selected>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Nama Penerima</label>
                                <input type="text" class="form-control" name="penerima" placeholder="1234 Main St" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Nomor Ponsel</label>
                                <input type="text" class="form-control" name="nohp" placeholder="08977231231" required>
                            </div>
                            <input type="hidden" class="form-control" name="nama" value="<?= $_POST['nama'] ?>">
                            <input type="hidden" class="form-control" name="price" value="<?= $_POST['price'] ?>">
                            <div class="col-md-9">
                                <label for="inputAddress2" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Apartment, Rumah, or kos" required>
                            </div>
                            <div class="col-md-3">
                                <label for="inputCity" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control" name="kodepos" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Opsi Pengiriman</label>
                                <select name="ekspedisi" class="form-select" aria-label="Default select example">
                                    <option value="JNE ($2)" selected>JNE ($2)</option>
                                    <option value="J&T ($2.2)">J&T ($2.2)</option>
                                    <option value="SiCepat ($1.8)">SiCepat ($1.8)</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Metode Pembayaran</label>
                                <select name="payment" class="form-select" aria-label="Default select example">
                                    <option selected>Transfer Bank</option>
                                    <option>Dana</option>
                                    <option>Alfamaret</option>
                                    <option>Indomaret</option>
                                    <option>Duel di Tempat</option>
                                    <option>COD (Bayar di tempat)</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                                <a href="main.php" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                        <!-- END Form -->
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>

    </html>

<?php
} else {
    header("Location: http://localhost/Tugas%20Akhir%20S2%20dkp/index.php");
}

?>