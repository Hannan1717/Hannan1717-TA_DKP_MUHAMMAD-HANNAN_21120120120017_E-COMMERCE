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
    <link rel="stylesheet" href="css/style.css">

    <title>XMarket</title>
  </head>

  <body style="overflow-x: hidden;">
    <?php
    $username = $getUser->username;
    $email = $getUser->email;

    navbartop($username, $email);
    ?>
    <!-- Navbar -->
    <!-- end navbar -->
    <div class="container">
      <?php

      $produk = array(
        array(
          "kategori" => "sneakers",
          "nama" => "Jordan 1 Retro High Shadow 2.0",
          "img" => "https://images.stockx.com/360/Air-Jordan-1-Retro-High-Black-White-Light-Smoke-Grey/Images/Air-Jordan-1-Retro-High-Black-White-Light-Smoke-Grey/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1621454319&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 237
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Jordan 1 Retro High OG Hyper Royal",
          "img" => "https://images.stockx.com/360/Air-Jordan-1-Retro-High-Hyper-Royal-Smoke-Grey/Images/Air-Jordan-1-Retro-High-Hyper-Royal-Smoke-Grey/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1618238995&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 374
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Nike SB Dunk Low What The Paul",
          "img" => "https://images.stockx.com/images/Nike-SB-Dunk-Low-What-The-P-Rod-1.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1620848420&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 740
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Balenciaga Track.2 Beige (W)",
          "img" => "https://images.stockx.com/Balenciaga-Track2-Beige-W.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1603481985&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 980
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Nike Zoom MMW 4 Rust",
          "img" => "https://images.stockx.com/images/Nike-Zoom-MMW-4-Rust.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1619651215&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 300
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Nike Zoom Kobe 4 Black White Royal Red",
          "img" => "https://images.stockx.com/images/Nike-Zoom-Kobe-4-Black-White-Royal-Red.png?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1618261415&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 400
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Nike Kobe 4 Del Sol",
          "img" => "https://images.stockx.com/images/Nike-Kobe-4-Del-Sol.png?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1607653733&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 400
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Nike Kobe 4 MLK Gold",
          "img" => "https://images.stockx.com/images/Nike-Kobe-4-MLK-Gold.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1618257099&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 879
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Adidas Yeezy Boost 350 V2 Black Red",
          "img" => "https://images.stockx.com/360/adidas-Yeezy-Boost-350-V2-Core-Black-Red-2017/Images/adidas-Yeezy-Boost-350-V2-Core-Black-Red-2017/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1606320792&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 443
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Adidas Yeezy 500 Utility Black",
          "img" => "https://images.stockx.com/360/adidas-Yeezy-500-Utility-Black/Images/adidas-Yeezy-500-Utility-Black/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1606319127&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 360
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Adidas Yeezy Foam RNNR Sand",
          "img" => "https://images.stockx.com/360/adidas-Yeezy-Foam-RNNR-Sand/Images/adidas-Yeezy-Foam-RNNR-Sand/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1617991585&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 304
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Adidas Superstar Bape ABC Camo Green",
          "img" => "https://images.stockx.com/360/adidas-Superstar-Bape-ABC-Camo-Green/Images/adidas-Superstar-Bape-ABC-Camo-Green/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1620672880&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 188
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Jordan 6 Retro Travis Scott British Khaki",
          "img" => "https://images.stockx.com/360/Air-Jordan-6-Retro-Travis-Scott-British-Khaki/Images/Air-Jordan-6-Retro-Travis-Scott-British-Khaki/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1620406101&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 500
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Jordan 4 Retro 30th Anniversary Laser",
          "img" => "https://images.stockx.com/360/Air-Jordan-4-Retro-30-Anniversary-Laser/Images/Air-Jordan-4-Retro-30-Anniversary-Laser/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1607060394&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 408
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Nike SB Dunk Low VX1000",
          "img" => "https://images.stockx.com/360/Nike-SB-Dunk-Low-VX1000/Images/Nike-SB-Dunk-Low-VX1000/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1615922545&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 490
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Jordan 7 Retro BCFC Paris Saint-Germain PSG (2021)",
          "img" => "https://images.stockx.com/images/Air-Jordan-7-Retro-BCFC-Paris-Saint-Germain-2021.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1615500448&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 230
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Nike Air Force 1 Low Supreme White",
          "img" => "https://images.stockx.com/360/Nike-Air-Force-1-Low-Supreme-Box-Logo-White/Images/Nike-Air-Force-1-Low-Supreme-Box-Logo-White/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1606164536&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 227
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Adidas NMD Hu Pharrell Black",
          "img" => "https://images.stockx.com/360/adidas-NMD-Hu-Pharrell-Black/Images/adidas-NMD-Hu-Pharrell-Black/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1609420354&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 222
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Adidas NMD R1 V2 Black White",
          "img" => "https://images.stockx.com/images/adidas-NMD-R1-V2-Black-White-1.png?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1606940561&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 149
        ),
        array(
          "kategori" => "sneakers",
          "nama" => "Adidas Yeezy QNTM (Lifestyle Model)",
          "img" => "https://images.stockx.com/360/adidas-Yzy-QNTM/Images/adidas-Yzy-QNTM/Lv2/img01.jpg?auto=compress&q=90&dpr=2&updated_at=1606324011&fit=clip&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 268
        ),
        // Baju
        array(
          "kategori" => "shirt",
          "nama" => "FEAR OF GOD ESSENTIALS Pull-Over Hoodie",
          "img" => "https://images.stockx.com/images/FEAR-OF-GOD-ESSENTIALS-Pull-Over-Hoodie-SS21-Cream-Buttercream.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1620853884&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 109
        ),
        array(
          "kategori" => "shirt",
          "nama" => "OFF-WHITE Diag Stencil Hoodie White",
          "img" => "https://images.stockx.com/images/OFF-WHITE-Diag-Stencil-Hoodie-White-Red-Black.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1611193415&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 648
        ),
        array(
          "kategori" => "shirt",
          "nama" => "Anti Social Social Club Kkoch Tee Black",
          "img" => "https://images.stockx.com/images/Anti-Social-Social-Club-Kkoch-Tee-Black.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1606315722&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 68
        ),
        array(
          "kategori" => "shirt",
          "nama" => "Supreme Takashi Murakami COVID-19 Relief",
          "img" => "https://images.stockx.com/images/Supreme-COVID-19-Relief-Box-Logo-Tee-White-Product.jpg?fit=clip&bg=FFFFFF&auto=compress&q=90&dpr=2&trim=color&updated_at=1606318188&fm=webp&ixlib=react-9.1.1&w=1247",
          "price" => 330
        ),

      );

      ?>
      <section class="samping mt-3">
        <div class="container">
          <div class="row md-3">
            <?php
            foreach ($produk as $key) { ?>
              <div class="card mt-4 ms-4 " style="width: 250px;">
                <img src="<?= $key['img'] ?>" class="p-2" style="width: 224px; height: 168.03px;object-fit: contain">
                <div class="card-body">
                  <p class="card-title"><?= $key['nama'] ?></p>
                  <h4 class="card-text mb-3">$<?= $key['price'] ?></h4>
                  <form action="checkout.php" method="POST">
                    <div class="mb-2">
                      <input type="hidden" class="form-control" name="kategori" value="<?= $key['kategori'] ?>">
                      <input type="hidden" class="form-control" name="nama" value="<?= $key['nama'] ?>">
                    </div>
                    <div class="mb-3">
                      <input type="hidden" class="form-control" name="price" value="<?= $key['price'] ?>">
                    </div>
                    <div class="mb-3">
                      <input type="hidden" class="form-control" name="img" value="<?= $key['img'] ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-primary">BUY</button>
                  </form>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>

  </html>
<?php
} else {
  header("Location: http://localhost/Tugas%20Akhir%20S2%20dkp/failed login.php");
}

?>