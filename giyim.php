<?php
$title = "Giyim";
require "sablon/header.php";
require "sablon/navbar.php";

include 'veritaban_conn.php';

$stmt = $conn->query("SELECT * from users.urunler");
$data_tablo = $stmt->fetchAll();

// $kontrol = $stmt->rowCount();
// if ($kontrol > 0) {
//     echo "<div class='alert alert-success'>giris basariyla gerceklesti </div>";
//     header('location:anasayfa.php');
// } else {
//     echo "<div class='alert alert-danger'>giris islemi basarisiz</div>";
// }

?>
<div class="container">
    <div class="giyim">
        <h3 class="center-text">Halep’in Popüler Geyimleri</h3>
    </div>


    <div class="row mb-4 ">
        <?php foreach ($data_tablo as $key) :  ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                <div class="card h-100 efect">
                    <a href="urun.php?id=<?=$key['id'] ?>"  ><img src="images/<?php echo $key['ufoto']; ?>" class="card-img-top ima-yem h-40" alt="..."></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $key['uisim'] ?></h5>
                        <p><?php echo $key['ufiyat'] ?></p>
                        <p><?php echo  $key['uaciklama'] ?></p>
                        <?php if ($key['ulike'] == 0) { ?>
                            <a class="aa" id="ada_<?= $key['id']; ?>" onclick="likeol( <?= $key['id']; ?> )" style="color:green; cursor:pointer;"><i  class="fas fa-heart ii"></i></a>

                        <?php  } else  { ?>
                            <a id="ada_<?= $key['id']; ?>" onclick="likeol( <?= $key['id']; ?> )" style="color: red; cursor:pointer;"><i class="fas fa-heart"></i></a>
                        <?php } ?>
                        <!-- <img src="images/c-icon.jpg"> -->
                        
                        <a href="sepete.php?id=<?=$key['id'] ?>" style="color: black;" ><i class="far fa-cart-arrow-down"></i></a>
                        <a href="urun.php?id=<?=$key['id'] ?>" style="color: black;" ><i class="far fa-comment"></i></i></a>
                            <!-- <a href="#" style="color: black;" ><i class="fas fa-cart-arrow-down"></i></a> -->
                        
                    </div>
                </div>
            </div>
        <?php
        endforeach; ?>




    </div>
    <?php require "sablon/footer.php" ?>