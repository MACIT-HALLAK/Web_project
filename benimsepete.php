<?php
require "sablon/header.php";
require "sablon/navbar.php";
include 'veritaban_conn.php';

$stmt = $conn->query("SELECT * from users.sepete");

$data_tablo = $stmt->fetchAll();

//echo $items['id'];
$count = 0;
foreach ($data_tablo as $items) {
    $count++;
}

?>

<div class="container p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-2">
                <div class="d-flex flex-row align-items-center"><a href="giyim.php"><i style="color:black;" class="fa fa-long-arrow-left"></i></a><span class="ml-2">Continue Shopping</span></div>
                <hr>
                <h6 class="mb-0">Shopping cart</h6>
                <div class="d-flex justify-content-between"><span>You have <?= $count; ?> items in your cart</span>
                    <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                        <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <?php foreach ($data_tablo as $items) { ?>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="images/<?= $items['Sfoto'] ?>" width="70">
                            <div class="ml-2"><span class="font-weight-bold d-block"><?php echo $items['uisim']; ?></span><span class="spec">256GB</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"><?php echo $items['adet'] ?></span><span class="d-block ml-5 font-weight-bold"><?php echo $items['Tfiyat'] ?></span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>