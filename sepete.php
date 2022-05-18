<?php
 session_start();
include 'veritaban_conn.php';
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "select * from users.urunler where id=?";
    $stmst = $conn->prepare($query);
    $stmst->execute([$id]);
    $result = $stmst->fetch();
    $uIsim = $result['uisim'];
    $uFiyat = $result['ufiyat'];
    $uFoto = $result['ufoto'];

    $mid = $_SESSION['id'];

    $querym = "select * from users.user where id=?";
    $stmst = $conn->prepare($querym);
    $stmst->execute([$mid]);
    $resultM = $stmst->fetch();
    $mIsim = $resultM['username'];

    $sorgu = $conn->prepare("insert into users.sepete(uisim,misim,adet,Tfiyat,Sfoto) values(?,?,?,?,?)");
    $insert = $sorgu->execute([
        $uIsim,
        $mIsim,
        1,
        $uFiyat,
        $uFoto
    ]);
    if ($sorgu->rowCount() == 1) {
        header('Location:giyim.php');

    }
}
?>