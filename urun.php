<?php
require "sablon/header.php";
require "sablon/navbar.php";
include 'veritaban_conn.php';
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);
    $query = "select * from users.urunler where id = ?";
    $stmst = $conn->prepare($query);
    $stmst->execute([$id]);
    $result = $stmst->fetch();

    $urunName =  $result['uisim'];
    $urunFiyat =  $result['ufiyat'];
    $urunAciklama =  $result['uaciklama'];
    $urunFoto =  $result['ufoto'];
    $urunLike =  $result['ulike'];

    // echo $urunName . '<br>';
    // echo $urunAciklama . '<br>';
    // echo $urunFiyat . '<br>';

}


?>


<div class="d-flex  mt-2 pl-2">
    <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
        <div class="about-product text-center "><img src="images/<?= $result['ufoto']; ?>" width="250px" height="225px">
            <div>
                <h4 class="mt-2"><?= $urunName; ?></h4>
                <h6 class="mt-0 text-black-50"><?= $result['uaciklama']; ?></h6>
            </div>
        </div>
        <div class="stats mt-2">
            <div class="d-flex justify-content-between p-price"><span>Fiyat</span><span><?= $result['ufiyat']; ?></span></div>
            <div class="d-flex justify-content-between p-price"><span></span><span><i class="fas fa-heart"></i></span></div>
            <!-- <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div> -->
        </div>
        <!-- <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Fiyat</span><span><?= $result['ufiyat']; ?></span></div> -->
    </div>

</div>

<div>
    <form class="border border-primary p-5" action="urun.php" method="POST" style="margin-top: -330px;display: inline-block; float: right; margin-right:25%;">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">
                <h4 style="text-align: center;">Yorumlar</h4>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" style="width: 400px;" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ekle</button>
    </form>
</div>