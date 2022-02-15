<?php

include 'header.php';

require 'database.php';

include 'cryptodata.php';

// SELECT ALL PRODUCTS


$result = $mysqli->query("SELECT * FROM products");

$rows = $result->fetch_all(MYSQLI_ASSOC);



?>
<div class="container-fluid">
    <div class="row bg-primary py-2 px-xl-5 text-white">
        <div class="col text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col text-center bg-light" style="--bs-bg-opacity: .5;">
            <h1 class="display-1 fw-bold">CRYPTOSHOP</h1>
            <h5 class="display-5">Your place to buy and sell cryptop coins</h5>
        </div>
    </div>
    <div class="row mt-4 align-items-center justify-content-center">

        <?php foreach ($rows as $row) : ?>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">The one and only</h6>
                        <p class="card-text">Buy and sell now at your favorite shop!</p>
                        <a href="#" class="card-link">Buy now!</a>
                        <a href="#" class="card-link">Sell now!</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>


</body>

</html>