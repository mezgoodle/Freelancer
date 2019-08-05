<?php require_once './templates/header.html' ?>
<?php require_once './templates/navigation.html' ?>
  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Start work now</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Web Developer - Web Designer - Full Stack Developer</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <?php
          for ($i=1; $i < 7; $i++) { ?>
          <!-- Portfolio Item -->
            <div class="col-md-6 col-lg-4">
              <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal<?php echo $i; ?>">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                  <div class="portfolio-item-caption-content text-center text-white">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/portfolio/<?php echo $i ?>.png" alt="">
              </div>
            </div>
        <?php  }?>
      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">My name is Maxim Zavalnyuk. I'm <?=date("Y")-2001?> years old. I study in Kiev and was born in Vinnytsia. I have been doing programming for over 4 years and I really like it. I like to play computer games and spend a lot of time outside</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">I want to develop my programming skills and work in a young, full of ideas company. Almost every day I find new technologies and practice in creating websites and programs</p>
        </div>
      </div>

      <!-- About Section Button -->
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="https://t.me/sylvenis" target="_blank">
          <i class="fab fa-telegram-plane"></i>
          Write me!
        </a>
      </div>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <?php require_once './templates/form.html' ?>
        </div>
      </div>

    </div>
  </section>

 <?php require_once './templates/footer.html' ?>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->
  
  <?php
    for ($i=1; $i < 7; $i++) { ?>
    <!-- Portfolio Modal -->
      <div class="portfolio-modal modal fade" id="portfolioModal<?=$i?>" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal<?=$i?>Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <i class="fas fa-times"></i>
              </span>
            </button>
            <div class="modal-body text-center">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <!-- Portfolio Modal - Title -->
                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal<?=$i?>"></h2>
                    <!-- Icon Divider -->
                    <div class="divider-custom">
                      <div class="divider-custom-line"></div>
                      <div class="divider-custom-icon">
                        <i class="fas fa-star"></i>
                      </div>
                      <div class="divider-custom-line"></div>
                    </div>
                    <!-- Portfolio Modal - Image -->
                    <img class="img-fluid rounded mb-5" src="img/portfolio/<?=$i?>.png" alt="">
                    <!-- Portfolio Modal - Text -->
                    <p class="mb-5" id="portfolioModal<?=$i?>"></p>
                    <button class="btn btn-primary" href="#" data-dismiss="modal">
                      <i class="fas fa-times fa-fw"></i>
                      Close Window
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php } ?>
  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.min.js"></script>
  <script src="js/contact_me.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
  <script src="js/portfolio.js"></script>
  <script src="js/year.js"></script>

</body>

</html>