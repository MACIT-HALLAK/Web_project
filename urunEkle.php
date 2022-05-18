<?php
$title = "Ürün Ekle";

require "sablon/header.php";
require "sablon/navbar.php";
include 'veritaban_conn.php';
$foto = "";
if (isset($_POST['submit'])) {
    $urunAdi = filter_var($_POST['urunadi'], FILTER_SANITIZE_STRING);
    $urunFiyat = filter_var($_POST['urunfiyat'], FILTER_SANITIZE_NUMBER_INT);
    $urunAciklama = filter_var($_POST['urunaciklama'], FILTER_SANITIZE_STRING);


    $errors = [];
    if (empty($urunAdi)) {
        $errors[] = "urun adi bos olmaz";
    }
    if (empty($urunFiyat)) {

        $errors[] = "urun fiyati bos olmaz yada saysal olmali";
    }
    if (empty($urunAciklama)) {
        $errors[] = "urun aciklamasi bos olmaz";
    }
    //  kamera kodu
    $uploadok = 1;
    if (($_FILES['ufoto']["tmp_name"] != "")) { //------------------------------------hata var
        if (isset($_FILES['ufoto'])) {

            $check = getimagesize($_FILES["ufoto"]["tmp_name"]);
            if ($check !== false) {

                $foto = "foto turu" . $check["mime"] . ".";
                $uploadok = 1;
            } else {
                // $foto =  "bir foto secin lutfen . ";

                $uploadok = 0;
            }
        } else {

            // $foto =  "bir foto secin lutfen . ";
            $uploadok = 0;
        }
    } else {
        $uploadok = 0;
    }
    $foto_name = " ";
    if (
        $uploadok == 1 || file_exists($_FILES["ufoto"]['tmp_name']) ||
        is_uploaded_file($_FILES["ufoto"]["tmp_name"])
    ) {
        $fname = $_FILES["ufoto"]["name"];
        $tmpName = $_FILES["ufoto"]["tmp_name"];
        $ext  = strtolower(pathinfo($fname, PATHINFO_EXTENSION));
        $yeni_isim = $fname . " " . uniqid(rand() . true) . "." . $ext;
        $path = "images/" . $yeni_isim;
        if (move_uploaded_file($tmpName, $path)) {
            $foto_name = $yeni_isim;
        } else if (empty($errors)) {
            echo  '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            Dosya yüklenirken bir hata oluşturulmuş
                </div>';
        }
    }


    //veri tabaininasorgu gonderme
    if ($uploadok == 1 and empty($errors)) {
        $sorgu = $conn->prepare("insert into users.urunler(uisim,ufiyat,uaciklama,ufoto) values(?,?,?,?)");
        $insert = $sorgu->execute([
            $urunAdi,
            $urunFiyat,
            $urunAciklama,
            $foto_name,
        ]);

        if ($insert) {
            $son_eleman = $conn->lastInsertId();
            echo '<div class="alert-s">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>'
                . $son_eleman . ' . nolu urun sisteme basarili bir sekilde eklenmistir.
                </div>';
        } else {
            echo "kayitta hatta olustu";
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>' .
                $err .
                '</div>';
        }
    }
}



?>
<div class="container p-5">
    <form action="urunEkle.php " method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-25">
                <label for="fname">Ürün Adı</label>
            </div>
            <div class="col-75">
                <input type="text" id="uadi" name="urunadi" placeholder="Ürün Adını Giriniz..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Ürün Fiyat</label>
            </div>
            <div class="col-75">
                <input type="text" id="ufiyat" name="urunfiyat" placeholder="Ürün Fiyatı Giriniz..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="subject">Ürün Açıklaması</label>
            </div>
            <div class="col-75">
                <textarea id="subject" name="urunaciklama" placeholder="Açıklama Ekleyin.." style="height:200px"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Ürün Fotoğrafı</label>
            </div>
            <div class="col-75">
                <input type="file" id="ufoto" name="ufoto" />
                <?php if (isset($uploadok)) {
                    if ($uploadok == 0) {
                        echo '
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                  dosya bos olamaz.
                    </div>';
                    }
                } ?>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
</div>