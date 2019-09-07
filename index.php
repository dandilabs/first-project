
<?php 
require_once "view/portal/header.php";
require_once "view/portal/sidebar.php";
?>
    <!-- sliders -->
    <div id="sliders">
      <div class="full-width">
        <div id="light-slider" class="carousel slide">
          <div id="carousel-area">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img src="assets/img/slider/2.jpeg" alt="">
                  <div class="carousel-caption text-left pl-5">
                    <h3 class="slide-title animated fadeInDown">ICSET (International Conference on Science, Engineering and Technology) 2019</h3>
                    <h4 class="slide-text animated fadeIn text-white">Grand Tjokro Hotel Jakarta</h4>
                    <h4 class="slide-text animated fadeIn text-white">Conference Date: <span class="bg-primary"> 23 November 2019 </span></h4>
                    <h4 class="slide-text animated fadeIn text-white">Deadline of Paper Submission: <span class="bg-primary"> 1 November 2019 </span></h4>
                    <a href="icset.php" class="btn btn-info">Go to Website >></a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/img/slider/2.jpeg" alt="">
                  <div class="carousel-caption">
                    <h3 class="slide-title animated fadeInDown">ICSSH (International Conference on Social Science and Humanities) 2019</h3>
                    <h4 class="slide-text animated fadeIn text-white">Grand Tjokro Hotel Jakarta/h4>
                      <h4 class="slide-text animated fadeIn text-white">Conference Date: <span class="bg-warning"> 23 November 2019 </span></h4>
                      <h4 class="slide-text animated fadeIn text-white">Deadline of Paper Submission: <span class="bg-warning">1 November 2019 </span></h4>
                      <a href="icssh.php" class="btn btn-warning">Go to Website >></a>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                  <i class="fa fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End sliders -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <div id="welcome" class="section-padding bg-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-xs-12">
            <div class="about block text-left">
              <!-- <img src="img/about/img1.png" alt=""> -->
              <h2><a href="#welcome">Welcome to IJCSET</a></h2>
              <p class="text-justify" style="font-size: 15px">IJCSET is an annually international conference in the field of Science, Engineering and Technology, initiated by Ikatan Dosen Republik Indonesia (IDRI) Province of DKI Jakarta and jointly organized by several universities both state and private universities in Indonesia. IJCSET 2019 is the first international joint event that carries out interdisciplinary knowledge field since it incorporate both international conferences such as ICSET (International Conference on Science, Engineering and Technology) and ICSSH (International Conference on Social Science and Humanities).</p>
              <p class="text-justify">
                IJCSET 2019 will be held on 23-24 November 2019 at Grand Tjokro Hotel, Jakarta, Indonesia. ICSET 2019 and ICSSH 2019 receive research and review papers from authors around the world. All papers submitted will be conducted by a blind review by at least 2 (two) reviewers. The deadline for receiving paper is October 30, 2019. The accepted paper will be published openly by the IOP Journal of Physics (Scopus indexed) for ICSET and EAI (indexed WoS: Web of Science) for ICSSH. 
              </p>
              <p class="text-justify">The University of Budi Luhur is set by the consortium as a host. So this page is also available at ijcset.idrijakarta.org and <a href=" www.budiluhur.ac.id"> www.budiluhur.ac.id</a></p>
              <p class="text-justify">Further information about ICSET 2019 and ICSSH 2019, please click the link below:<br></p>
              <h4><a href="icset.php" target="_blank">•  ICSET (International Conference on Science, Engineering and Technology) 2019</a></h4>
              <h4><a href="icssh.php" target="_blank">•  ICSSH (International Conference on Social Science and Humanities) 2019</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->

      <!-- Contact Form Section Start -->
      <section id="contact" class="contact-form section-padding bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s"><a href="#contact">Contact Us</a></h2>
            </div>
          </div>
          <div class="row">
            

            <div class="col-lg-4 col-md-6 col-xs-12">
              <h4 class="contact-info-title text-left">Contact Information</h4>
              <div class="contact-info">
                <address>
                 Darmawan Napitupulu
                 <br>HP/WA: +6281314060258
                 <br>Email: darwan.na70@gmail.com
                 <br><a href="http://ijcset.idrijakarta.org">http://ijcset.idrijakarta.org</a>
               </address>
               <ul class="social-links">
                <li>
                  <a href="#" class="fa fa-facebook"></a>
                </li>
              </ul>
              <!--
                <li>
                  <a href="https://www.youtube.com/channel/UCtZTZqwWFrzcnL1fHzfSLDw" class="fa fa-youtube"></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/universitas_trunojoyo_madura/" class="fa fa-instagram"></a>
                </li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Form Section End -->


      <!-- Go to Top Link -->
      <a href="#" class="back-to-top">
        <i class="fa fa-arrow-up"></i>
      </a>
      
      <!-- Preloader -->
      <div id="preloader">
        <div class="loader" id="loader-1"></div>
      </div>
      <!-- End Preloader -->
<?php include "view/portal/footer.php" ?>
