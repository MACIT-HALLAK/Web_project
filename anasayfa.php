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
                    <h5 class="card-title">SALAH ALD??N ALAYUB??</h5>
                    <p class="card-text ">Eyyubiler Devleti ile Eyyubi Hanedan??'n??n kurucusu ve ilk Sultan?? olan S??nni K??rt komutan ve h??k??mdard??r.1187'de Kutsal Topraklar'?? Ha??l??lardan geri almak i??in b??y??k bir ordu kurdu ve komutas??ndaki ordusuyla beraber 4 Temmuz 1187'de H??ttin Muharebesi ile Kud??s Kral?? L??zinyanl?? Guy'??n ordusunun b??y??k bir b??l??m??n?? yok etti.</p>
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
          <h4 class="card-title">SALAH ALD??N ALAYUB??</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedan??'n??n kurucusu ve ilk Sultan?? olan S??nni K??rt komutan ve h??k??mdard??r.1187'de Kutsal Topraklar'?? Ha??l??lardan geri almak i??in b??y??k bir ordu kurdu ve komutas??ndaki ordusuyla beraber 4 Temmuz 1187'de H??ttin Muharebesi ile Kud??s Kral?? L??zinyanl?? Guy'??n ordusunun b??y??k bir b??l??m??n?? yok etti.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <div class="card card-custom bg-white  border-white border-0  m-4" style="height: 40px">
        <a href="yemekler.php">
          <div class="card-custom-img " style="background-image: url(images/tatl??.jpg);"></div>
        </a>
        <div class="card-custom-avatar">
          <img class="img-fluid " src="images/tatl??.jpg" alt="Avatar" />
        </div>
        <div class="card-body" style="overflow-y: auto;">
          <h4 class="card-title">KARI??IK TATLI</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedan??'n??n kSuriye mutfa???? tatl??lar a????s??ndan ??ok zengin bir d??nya mutfa????d??r. Baklava, kaday??f, lokma gibi hamurlu tatl??lar, muhallebi, ke??k??l, kazandibi, s??tla?? gibi s??tl?? tatl??lar, ho??af ve kompostolar, revani, helva, a??ure ve Kabak Tatl??s?? gibi tatl??lar geni?? bir yelpazeye sahiptirler. Baklava Suriye mutfa????n??n en tan??nm???? tatl??lar?? aras??ndad??r. ??ok ince a????lm???? yufkan??n aras??na f??nd??k, ceviz veya antep f??st?????? konarak pi??irilmesinden sonra bir ??erbetle tatland??r??lmas?? yoluyla haz??rlan??r.</p>
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
          <h4 class="card-title">KAPALI ??AR??I??</h4>
          <p class="card-text">Sokaklar??n??n uzunluklar?? toplam??n??n 10 km.den fazla oldu??u s??ylenen ??ar????n??n b??y??k bir k??sm?? 15. yy???da yap??lm????. Ortado??u???daki en uzun ??ar???? niteli??inde olan bu ??ar????, birbirini takip eden hanlardan olu??makta.

            ??ar???? i??indeki ??ok say??da kervansaray g??n??m??zde imalathane olarak kullan??l??yor. Bu b??y??k ??ar????da i?? kollar??na g??re ayr??lm???? esnaflar genel olarak; turistik e??yalar ile baharat, hal??-kilim, ip, giysi, dokuma, el i??leri ve baharat sat??yor. Kapal?? ??ar???? d??????nda Bab?????l Farac ve Tilel ??ar????s??, Souk El Haldiyye (Tembel Kad??nlar ??ar????s??-Kolay Avrat Pazar?? al????veri?? yapmak i??in uygun mekanlard??r.</p>
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
          <p class="card-text">geleneksel arap erkek k??yafeti. arap erkeklerinin pijama niyetine giydi??i k??yafet ki geni?? gibi rahatt??r.</p>
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
          <h4 class="card-title">SALAH ALD??N ALAYUB??</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedan??'n??n kurucusu ve ilk Sultan?? olan S??nni K??rt komutan ve h??k??mdard??r.1187'de Kutsal Topraklar'?? Ha??l??lardan geri almak i??in b??y??k bir ordu kurdu ve komutas??ndaki ordusuyla beraber 4 Temmuz 1187'de H??ttin Muharebesi ile Kud??s Kral?? L??zinyanl?? Guy'??n ordusunun b??y??k bir b??l??m??n?? yok etti.</p>
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
          <h4 class="card-title">SALAH ALD??N ALAYUB??</h4>
          <p class="card-text">Eyyubiler Devleti ile Eyyubi Hanedan??'n??n kurucusu ve ilk Sultan?? olan S??nni K??rt komutan ve h??k??mdard??r.1187'de Kutsal Topraklar'?? Ha??l??lardan geri almak i??in b??y??k bir ordu kurdu ve komutas??ndaki ordusuyla beraber 4 Temmuz 1187'de H??ttin Muharebesi ile Kud??s Kral?? L??zinyanl?? Guy'??n ordusunun b??y??k bir b??l??m??n?? yok etti.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- //--------------------------------------- -->




<!-- <div class="card-div">

<p class="card-pergraf"> 
<img src="images/SC.jpg" class="imag-anasayfa">
   Kuzey Suriye???nin en ??nemli ??ehri ve kendi ad??n?? ta????yan 
  ilin merkezi olup Anadolu???dan Mezopotamya???ya ve Akdeniz???den ??ran???a giden 
  ana yollar??n kav??ak noktas??nda kurulmu??tur. Bu dikkat ??ekici co??raf?? konumu 
  dolay??s??yla kervanlar??n u??rak yeri olmu??, bunun sonucunda 
  ticaretle zenginle??ip medeniyette y??kselirken s??k s??k ayn?? 
  yollardan sefere ????kan ordular??n tahribat??na ve ya??malar??na m??ruz 
  kalm????t??r. ??ehir, Eski??a?? tarihinde ta????d?????? ??nemi co??raf?? konumu kadar 
  f??rt??na tanr??s?? Adad?????n k??lt merkezi olmas??na da bor??ludur.
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