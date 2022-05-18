<?php
$title = "Anasayfa";
require "sablon/header.php";
require "sablon/navbar.php";
?>
<div class="container">

  <div id="carouselExampleIndicators" class="carousel slide m-t-20" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/aleppo.jpg" class="d-block w-100 img-slider" alt="hallep kalesi">
      </div>
      <div class="carousel-item">
        <img src="images/umauy.jpg" class="d-block w-100 img-slider" alt="abdulraman al kuakibi">
      </div>
      <div class="carousel-item">
        <img src="images/yemek.jpg" class="d-block w-100 img-slider" alt="kirazli kepab">
      </div>
      <div class="carousel-item">
        <img src="images/tarihiYer.jpg" class="d-block w-100 img-slider" alt="kirazli kepab">
      </div>
      <div class="carousel-item">
        <img src="images/saad.jpg" class="d-block w-100 img-slider" alt="kirazli kepab">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>


  <!-- <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 h-75">
            <div class="card h-75 shadow-sm p-2 mb-5 bg-white rounded ">
            <a href="unlu.php" class="unlu-yon" ><img src="images/tarihiYer.jpg" class="card-img-top img-card " alt="..."></a>
                <div class="card-body overflow-auto">
                    <h5 class="card-title">SALAH ALDİN ALAYUBİ</h5>
                    <p class="card-text ">Eyyubiler Devleti ile Eyyubi Hanedanı'nın kurucusu ve ilk Sultanı olan Sünni Kürt komutan ve hükümdardır.1187'de Kutsal Topraklar'ı Haçlılardan geri almak için büyük bir ordu kurdu ve komutasındaki ordusuyla beraber 4 Temmuz 1187'de Hıttin Muharebesi ile Kudüs Kralı Lüzinyanlı Guy'ın ordusunun büyük bir bölümünü yok etti.</p>
                </div>
            </div>
        </div>
</div> -->

  <br><br>
  <!-- //------------------------------------------------- -->

  <div class="card-deck ">

    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <div class="card card-custom bg-white anasayfa-shado  border-white border-0 m-4  " style="height: 40px">
        <a href="unlu.php">
          <div class="card-custom-img" style="background-image: url(images/slah.jpg);"></div>
        </a>
        <div class="card-custom-avatar">
          <img class="img-fluid" src="images/tarihiYer.jpg" alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <h4 class="card-title">SALAH ALDİN ALAYUBİ</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedanı'nın kurucusu ve ilk Sultanı olan Sünni Kürt komutan ve hükümdardır.1187'de Kutsal Topraklar'ı Haçlılardan geri almak için büyük bir ordu kurdu ve komutasındaki ordusuyla beraber 4 Temmuz 1187'de Hıttin Muharebesi ile Kudüs Kralı Lüzinyanlı Guy'ın ordusunun büyük bir bölümünü yok etti.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <div class="card card-custom bg-white  border-white border-0  m-4" style="height: 40px">
        <a href="yemekler.php">
          <div class="card-custom-img " style="background-image: url(images/tatlı.jpg);"></div>
        </a>
        <div class="card-custom-avatar">
          <img class="img-fluid " src="images/tatlı.jpg" alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <h4 class="card-title">KARIŞIK TATLI</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedanı'nın kSuriye mutfağı tatlılar açısından çok zengin bir dünya mutfağıdır. Baklava, kadayıf, lokma gibi hamurlu tatlılar, muhallebi, keşkül, kazandibi, sütlaç gibi sütlü tatlılar, hoşaf ve kompostolar, revani, helva, aşure ve Kabak Tatlısı gibi tatlılar geniş bir yelpazeye sahiptirler. Baklava Suriye mutfağının en tanınmış tatlıları arasındadır. Çok ince açılmış yufkanın arasına fındık, ceviz veya antep fıstığı konarak pişirilmesinden sonra bir şerbetle tatlandırılması yoluyla hazırlanır.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <div class="card card-custom bg-white  border-white border-0  m-4" style="height: 40px">
        <a href="seyhat.php">
          <div class="card-custom-img" style="background-image: url(images/kapalc.jpg);"></div>
        </a>
        <div class="card-custom-avatar">
          <img class="img-fluid" src="images/tarihiYer.jpg" alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <h4 class="card-title">KAPALI ÇARŞIİ</h4>
          <p class="card-text">Sokaklarının uzunlukları toplamının 10 km.den fazla olduğu söylenen çarşının büyük bir kısmı 15. yy’da yapılmış. Ortadoğu’daki en uzun çarşı niteliğinde olan bu çarşı, birbirini takip eden hanlardan oluşmakta.

            Çarşı içindeki çok sayıda kervansaray günümüzde imalathane olarak kullanılıyor. Bu büyük çarşıda iş kollarına göre ayrılmış esnaflar genel olarak; turistik eşyalar ile baharat, halı-kilim, ip, giysi, dokuma, el işleri ve baharat satıyor. Kapalı Çarşı dışında Bab’ül Farac ve Tilel Çarşısı, Souk El Haldiyye (Tembel Kadınlar Çarşısı-Kolay Avrat Pazarı alışveriş yapmak için uygun mekanlardır.</p>
        </div>
      </div>
    </div>
    <!-- ----------- -->
    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <div class="card card-custom bg-white  border-white border-0  m-4" style="height: 40px">
        <a href="giyim.php">
          <div class="card-custom-img" style="background-image: url(images/cala.jpg);"></div>
        </a>
        <div class="card-custom-avatar">
          <img class="img-fluid" src="images/tarihiYer.jpg" alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <h4 class="card-title">CALABIYE</h4>
          <p class="card-text">geleneksel arap erkek kıyafeti. arap erkeklerinin pijama niyetine giydiği kıyafet ki geniş gibi rahattır.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <div class="card card-custom bg-white  border-white border-0  m-4" style="height: 40px">
        <div class="card-custom-img" style="background-image: url(images/slah.jpg);"></div>
        <div class="card-custom-avatar">
          <img class="img-fluid" src="images/tarihiYer.jpg" alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <h4 class="card-title">SALAH ALDİN ALAYUBİ</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedanı'nın kurucusu ve ilk Sultanı olan Sünni Kürt komutan ve hükümdardır.1187'de Kutsal Topraklar'ı Haçlılardan geri almak için büyük bir ordu kurdu ve komutasındaki ordusuyla beraber 4 Temmuz 1187'de Hıttin Muharebesi ile Kudüs Kralı Lüzinyanlı Guy'ın ordusunun büyük bir bölümünü yok etti.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <div class="card card-custom bg-white  border-white border-0  m-4" style="height: 40px">
        <div class="card-custom-img" style="background-image: url(images/slah.jpg);"></div>
        <div class="card-custom-avatar">
          <img class="img-fluid" src="images/tarihiYer.jpg" alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <h4 class="card-title">SALAH ALDİN ALAYUBİ</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedanı'nın kurucusu ve ilk Sultanı olan Sünni Kürt komutan ve hükümdardır.1187'de Kutsal Topraklar'ı Haçlılardan geri almak için büyük bir ordu kurdu ve komutasındaki ordusuyla beraber 4 Temmuz 1187'de Hıttin Muharebesi ile Kudüs Kralı Lüzinyanlı Guy'ın ordusunun büyük bir bölümünü yok etti.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- //--------------------------------------- -->




<!-- <div class="card-div">

<p class="card-pergraf"> 
<img src="images/SC.jpg" class="imag-anasayfa">
   Kuzey Suriye’nin en önemli şehri ve kendi adını taşıyan 
  ilin merkezi olup Anadolu’dan Mezopotamya’ya ve Akdeniz’den İran’a giden 
  ana yolların kavşak noktasında kurulmuştur. Bu dikkat çekici coğrafî konumu 
  dolayısıyla kervanların uğrak yeri olmuş, bunun sonucunda 
  ticaretle zenginleşip medeniyette yükselirken sık sık aynı 
  yollardan sefere çıkan orduların tahribatına ve yağmalarına mâruz 
  kalmıştır. Şehir, Eskiçağ tarihinde taşıdığı önemi coğrafî konumu kadar 
  fırtına tanrısı Adad’ın kült merkezi olmasına da borçludur.
</p>

</div> -->

<!-- <div class="col-md-6 mx-auto border border-primary rounded m-5 p-5">
         <form action="">

            <label> user name</label>
            <input type="text"> <br><br>
            <lable>password</lable>
            <input type="text">
            <br> <br>

            <input type="submit" value="gonder">

         </form>
      </div> -->



</div>

<?php require "sablon/footer.php"; ?>