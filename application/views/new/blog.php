<!doctype html>
<html lang="en">
  <head>
   <?php $this->load->view('new/assets-css') ?>
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <?php $this->load->view('new/header') ?>

    <!-- END templateux-navbar -->
    <section class="templateux-hero"  data-scrollax-parent="true">
      <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="<?=base_url()?>images2/hero_2.jpg" /></div> -->

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1>Our Blog</h1>
            <p class="lead">We are experts, engineers, authors, speakers, artists who creates astounding products for people.</p>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
    
    <section class="templateux-portfolio-overlap mb-5" id="next">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <a class="post animsition-link" href="blog-single.html">
              <figure>
                <img src="<?=base_url()?>images2/img_1.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>45 Cool Bag Illustrations</h2>
                  <span>February 21, 2018</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a class="post animsition-link" href="blog-single.html">
              <figure>
                <img src="<?=base_url()?>images2/img_2.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>45 Cool Bag Illustrations</h2>
                  <span>February 21, 2018</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- END row -->

        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <a class="post animsition-link" href="blog-single.html">
              <figure>
                <img src="<?=base_url()?>images2/img_3.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>45 Cool Bag Illustrations</h2>
                  <span>February 21, 2018</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a class="post animsition-link" href="blog-single.html">
              <figure>
                <img src="<?=base_url()?>images2/img_4.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>45 Cool Bag Illustrations</h2>
                  <span>February 21, 2018</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- END row -->

        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <a class="post animsition-link" href="blog-single.html">
              <figure>
                <img src="<?=base_url()?>images2/img_5.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>45 Cool Bag Illustrations</h2>
                  <span>February 21, 2018</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a class="post animsition-link" href="blog-single.html">
              <figure>
                <img src="<?=base_url()?>images2/img_2.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>45 Cool Bag Illustrations</h2>
                  <span>February 21, 2018</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- END row -->

        <div class="row pt-5" data-aos="fade-up" data-aos-delay="100">
          <div class="col-md-12 text-center">
            <a href="#" class="button button--red  mb-5">Load More Posts...</a>
          </div>
        </div>

      </div>
    </section>

    <footer class="templateux-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 text-md-left text-center">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          </div>
          <div class="col-md-6 text-md-right text-center footer-social">
            <a href="#" class="p-3"><span class="icon-facebook2"></span></a>
            <a href="#" class="p-3"><span class="icon-twitter2"></span></a>
            <a href="#" class="p-3"><span class="icon-dribbble2"></span></a>
            <a href="#" class="p-3"><span class="icon-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>

  </div>

  
 <?php $this->load->view('new/assets-js') ?>
  
  </body>
</html>