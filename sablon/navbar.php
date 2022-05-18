<?php
ob_start();
$giris = false;
$admin = 0;
  session_start();

if (isset($_SESSION['giris'])) {
  $giris = $_SESSION['giris'];
  $admin = $_SESSION['admin'];
}
ob_end_flush();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">HALEP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="anasayfa.php">Anasayfa<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contect.php">İletişim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Hakkımızda</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Etkinler
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="unlu.php">Ünlüler</a>
          <a class="dropdown-item" href="seyhat.php">Seyhat Bölgeler</a>
          <a class="dropdown-item" href="yemekler.php">Meşhur Yemekler</a>
          <a class="dropdown-item" href="giyim.php">Giyimler</a>
        </div>
      </li>

      <?php if ($giris and $admin  == 1) { ?>
        <li class="nav-item">
          <a class="nav-link" href="urunEkle.php">Urun Ekle</a>
        </li>
      <?php } ?>
    </ul>
    <?php if (!$giris) { ?>
      <li style="list-style-type: none;"><a class="font-i inline" style="  padding:0px; height:52px;width:60px" href="kayitOl.php"><i class="bi bi-person-fill icon-giris"></i></a></li>

      <li style="list-style-type: none;"><a class="font-i inline" style="  padding:0px; height:52px;width:60px" href="giris.php"><i class="bi bi-box-arrow-in-right icon-giris"></i></a></li>

    <?php } else { ?>
      <li style="list-style-type: none;"><a class="font-i" style=" padding:0px; height:52px;width:60px"" href=" cikis.php"><i class="bi bi-box-arrow-left icon-cikis"></i></a></li>

    <?php } ?>


  </div>
</nav>