<?php require_once("admin/kutuphane/baglanti.php"); ?>

<?php
$sorgu="SELECT * FROM bilgi";
$sonuc=mysqli_query($baglanti,$sorgu);

while($satir=mysqli_fetch_array($sonuc)){
  $bilgiler[$satir['id']]=$satir;;
}


$sorgu="SELECT * FROM egitim";
$sonuc=mysqli_query($baglanti,$sorgu);

while($satir=mysqli_fetch_array($sonuc)){
  $egitimler[$satir['id']]=$satir;;
}

$sorgu="SELECT * FROM slayt";
$sonuc=mysqli_query($baglanti,$sorgu);

while($satir=mysqli_fetch_array($sonuc)){
  $slaytlar[$satir['id']]=$satir;;
}



//dizigor($bilgiler);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> <?php echo $bilgiler[1]['icerik']; ?> kişisel web sayfası </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo"><a href="index.html"><?php echo $bilgiler[1]['icerik']; ?>.</span> </a></h1>
            </div>
            <div class="col-6 col-md-8">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="#home-section" class="nav-link">Ana Sayfa</a></li>
                    <li><a href="#what-we-do-section" class="nav-link">Eğitim Bilgileri</a></li>
                    <li><a href="#about-section" class="nav-link">Hakkımızda</a></li>
                    <li><a href="#portfolio-section" class="nav-link">Projeler</a></li>
                    <li><a href="#studio-section" class="nav-link">Galeri</a></li>
                    <li><a href="#contact-section" class="nav-link">İletişim</a></li>
                    <li><a href="admin" class="nav-link">Admin Paneli</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->
    
    <div class="site-blocks-cover" id="home-section">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
        

        <?php foreach($slaytlar as $slayt) { ?>
        <div class="slide">
            <img src="admin/img/slayt/<?php echo $slayt['id']?>.jpg" alt="Image">  
          </div>
         <?php } ?>
        
        
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto align-self-center">
            <div class="intro">
                <div  class="heading">
                    <h1  align="right"><?php echo $bilgiler[1]['icerik']; ?></h1>
                </div>
              <div class="text">
                <p class="sub-text mb-5">Abdullah ünalın kişisel web sayfasına hoş geldiniz, ulaşmak istediğiniz ve edinmek istediğiniz her şeye buradan ulaşabilrisiniz.</p>
                <p><a href="#" target="_blank" class="btn btn-outline-primary btn-md">Projelere git</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-blocks-cover -->

    <div class="site-section" id="what-we-do-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Abdullah ünal kimdir?</span>
            <h2 class="title text-primary">Eğitim Bilgileri</h2>
          </div>
        </div>
        </div>
        </div>
        <div class="row">
        
        <?php foreach($egitimler as $egitim) { ?>

          <div class="col-lg-10 ml-auto">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3><?php echo $egitim ['tipi'];?></h3>
                  <p> <?php echo $egitim ['adi'];?></p>
                  <p class="readmore"> 
                  <?php
                   echo $egitim ['baslama'] ."-";
                  
                   if(empty($egitim['bitis'])==false){
                     echo $egitim['bitis'];
                   }else{
                     echo "Devam Ediyor";
                   }
                   
                   ?>
                  
                  </p>
                </div>
                </div>
                </div>
                </div>
              
              <?php } ?>
              
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-section -->

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5">
            <img src="images/abdullah.unal.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto section-title">
            <span class="sub-title mb-2 d-block"></span>
            <h2 class="title text-primary mb-3">Hakkımda</h2>
            <p class="mb-4">Adanada doğdum, Üniversite hayatıma Burdur Mehmet Akif Ersoy Üniversitesinde devam ettim. Kurumsal Web siteler, masa üstü uygulamarı geliştirdim. Bu projeleri yaparken DELPHİ, C#, PHP dillerinden ve SQL, MYSQL, ORACLE/PLSQL veri tabanlarını kullandım.</p>


            <div class="d-flex">
              <ul class="list-unstyled ul-check success mr-5">
                <li>Web Site</li>
                <li>Yazılım Geliştrme</li>
                <li>Danışmanlık</li>
                
              </ul>
            
                
              
                
              </ul>
            </div>
            <p><a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=bFrnH7pyzW8" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
          </div>
        </div>
      </div>
    </div> <!-- .END site-section -->


    <div class="site-section" id="what-we-do-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">Ekibimle Tanışın</span>
            <h2 class="title text-primary">Bizler İşlerimizin en iyisiyiz..</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 mb-5 person">
            <img src="images/elvan.duman.jpg" alt="Image" class="img-fluid mb-5">

            <div class="row">
              <div class="col-lg-10 ml-auto">
                <div class="pr-lg-5">
                  <h3>Elvan Duman</h3>
                  <span class="mb-4 d-block">Assist. Prof. Dr. - Software Engineering</span>
                  <p>Ankara/Gazi Üniversitei Bilgisayar Mühendisliği bölümünden 2012 yılında mezun oldu. Mezun olduktan sonra Gazi üniversitesinde araştırma görevlisi olarak çalışmaya devam etti. Daha sonra yüksek Lisans ve Doktora tezlerini yazarak Burdur Mehmet Akif Ersoy Üniversitesinde Assit.Prof.Dr olarak çalışmaya başladı. Kendisi görüntü işleme, makina öğrenmesi, sinyal işleme gibi konularda çalışmıştır. .</p>
                  <p class="d-flex align-items-center">
                    <span class="mr-3 text-black">Bizi takip edin:</span>
                    <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                    <a href="#" class="facebook p-2"><span class="icon-facebook"></span></a>
                    <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                    <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                    <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 person">
            <img src="images/mustafa.unal.jpg" alt="Image" class="img-fluid mb-5">
            <div class="row">
              <div class="col-lg-10 ml-auto">
                <div class="pr-lg-5">
                  <h3>Mustafa Ünal</h3>
                  <span class="mb-4 d-block">CTO, Kurucu Ortak</span>
                  <p>Kendisi Adanada doğdu, Üniversite eğitmini Hatay Musafa Kemal Üniversitesi Elektrik ve elektronik Mühendisliği üzerine tamamladıktan sonra, yine aynı üniversitede yazılım geliştirme alanında yüksek lisansını yaptı.</p>
                  <p></p>
                  <p class="d-flex align-items-center">
                    <span class="mr-3 text-black">Bizi takip edin:</span>
                    <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                    <a href="#" class="github p-2"><span class="icon-github"></span></a>
                    <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                    <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                    <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section" id="portfolio-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Recent Works</span>
            <h2 class="title text-primary mb-3">We love what we do, check out some of our latest works</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="images/sq_img_2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Project title one</h3>
            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <img src="images/sq_img_4.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
            <h3>Project title two</h3>
            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jean Smith</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>

          <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Project title three</h3>
            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p class="mb-4><a href="#" class="readmore">Visit website</a></p>
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
         <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Testimonials</span>
            <h2 class="title text-primary mb-3">Our Client Sayings</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jean Smith</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jean Smith</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="site-section" id="studio-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Photos</span>
            <h2 class="title text-primary mb-3">Studio Gallery</h2>
          </div>
        </div>
       
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_1.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_1.jpg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_2.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_2.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_3.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_3.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_4.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_4.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_5.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_5.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_6.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_6.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_7.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_7.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_9.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_9.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_10.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_10.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_11.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_11.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/sq_img_12.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/sq_img_12.jpg">
            </a>
          </div>


        </div>
      </div>
    </div> <!-- END .site-section -->
    
    <div class="site-section" id="contact-section">
      <div class="container">
        <form action="" class="contact-form">

          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Get In Touch</span>
            <h2 class="title text-primary">Contact Us</h2>
          </div>

          <div class="row mb-4">
            <div class="col-md-6 mb-4 mb-md-0">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="text" class="form-control" placeholder="Email">
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-md">Send Message</button>
            </div>
          </div>

        </form>
      </div>
    </div> <!-- END .site-section -->
  
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4"><?php echo $bilgiler['2']['isim'];?></h3>
                <p><?php echo $bilgiler['2']['icerik'];?></p>
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto">
           
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#home-section" class="smoothscroll">Home</a></li>
                  <li><a href="#what-we-do-section" class="smoothscroll">What We Do</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#team-section"  class="smoothscroll">Team</a></li>
                </ul>
              </div>
              
            </div>
            
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

              <form method="post" class="form-subscribe">
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter full name" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                </div>
              </form>

            </div>

            


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

     
  </body>
</html>