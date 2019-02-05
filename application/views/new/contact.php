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
          <div class="col-md-3"  data-aos="fade-up" data-aos-delay="100">
            <div class="media templateux-media mb-4">
              <div class="mr-3 icon">
                <span class="icon-monitor display-3"></span>
              </div>
              <div class="media-body">
                <h3 class="h5">Phone/Whatsapp</h3>
                <p>081288167973</p>
              </div>
            </div>
          </div>
          <div class="col-md-3"  data-aos="fade-up" data-aos-delay="200">
            <div class="media templateux-media mb-4">
              <div class="mr-3 icon">
                <span class="icon-command display-3"></span>
              </div>
              <div class="media-body">
                <h3 class="h5">Email</h3>
                <p>iwanmusikmalang@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-3"  data-aos="fade-up" data-aos-delay="300">
            <div class="media templateux-media mb-4">
              <div class="mr-3 icon">
                <span class="icon-feather display-3"></span>
              </div>
              <div class="media-body">
                <h3 class="h5">Instagram</h3>
                <p>iwanmusikproduction</p>
              </div>
            </div>
          </div>
          <div class="col-md-3"  data-aos="fade-up" data-aos-delay="300">
            <div class="media templateux-media mb-4">
              <div class="mr-3 icon">
                <span class="icon-feather display-3"></span>
              </div>
              <div class="media-body">
                <h3 class="h5">Address</h3>
                <p>Perumahan Griya Permata Alam Blok F No.2, Karangploso, Malang</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>  
    </section>
    

    <section><div class="container"><iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.0039289676281!2d112.60718982917663!3d-7.893423999644574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTMnMzYuMyJTIDExMsKwMzYnMjcuOSJF!5e0!3m2!1sen!2sid!4v1548681622596" allowfullscreen></iframe></div></section>

    <?php $this->load->view('new/footer') ?>

  </div>

  
   <?php $this->load->view('new/assets-js') ?>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=base_url()?>js2/google-map.js"></script>
  
  </body>
</html>