<!doctype html>
<html lang="en">
  <head>
     <?php $this->load->view('new/assets-css') ?>
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

     <?php $this->load->view('new/header-white') ?>

    <!-- END templateux-navbar -->
    <section class="templateux-hero mb-5 overlay"  data-scrollax-parent="true">
       <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="<?=base_url()?>images2/pricelist.jpg" /></div>

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1>Get in touch</h1>
            <p class="lead">Have an amazing idea you would like to work with us on? Let us know calling us below</p>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
    <section class="templateux-section" id="next">


      <div class="container">
        <div class="row">
          <div class="col-md-12 clearfix mb-5" data-aos="fade-up">
            <h2>Contact us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6"  data-aos="fade-up" data-aos-delay="100">
            <div class="media templateux-media mb-6">
              <div class="mr-3 icon">
                <i class="fa-brands fa-whatsapp fa-xl display-3"></i>
              </div>
              <div class="media-body">
                <h3 class="h5">Phone/WA</h3>
                <p><a href="http://wa.me/6281288167973">081288167973</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6"  data-aos="fade-up" data-aos-delay="200">
            <div class="media templateux-media mb-6">
              <div class="mr-3 icon">
                <i class="fa-regular fa-envelope fa-xl display-3"></i>
              </div>
              <div class="media-body">
                <h3 class="h5">Email</h3>
                <p>iwanmusikproduction@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6"  data-aos="fade-up" data-aos-delay="300">
            <div class="media templateux-media mb-6">
              <div class="mr-3 icon">
                <i class="fa-brands fa-instagram fa-xl display-3"></i>
              </div>
              <div class="media-body">
                <h3 class="h5">Instagram</h3>
                <p><a href="https://www.instagram.com/iwanmusikproduction/">@iwanmusikproduction</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6"  data-aos="fade-up" data-aos-delay="300">
            <div class="media templateux-media mb-6">
              <div class="mr-3 icon">
                <i class="fa-solid fa-location-dot fa-xl display-3"></i>
              </div>
              <div class="media-body">
                <h3 class="h5">Address</h3>
                <p>Kota Malang, Jawa Timur, Indonesia</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>  
    </section>
    

    <section><div class="container"><iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63219.15529082515!2d112.59058332022902!3d-7.978558312030891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Malang%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1686241926123!5m2!1sen!2sid"  allowfullscreen></iframe></div></section>
    <?php $this->load->view('new/footer') ?>

  </div>

  
   <?php $this->load->view('new/assets-js') ?>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=base_url()?>js2/google-map.js"></script>
  
  </body>
</html>