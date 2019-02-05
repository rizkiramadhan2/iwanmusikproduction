<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('new/assets-css') ?>
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

   <?php $this->load->view('new/header-white') ?>


    <!-- END templateux-navbar -->
    <section class="templateux-hero overlay"  data-scrollax-parent="true">
      <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="<?=base_url()?>images2/about.jpg" /></div>

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1>About Us</h1>
            <p class="lead">We are event equipment provider that makes your event great</p>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
    
    <section class="templateux-section" id="next">
      
      <div class="container py-5" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 clearfix mb-3">
            <h2>Long Short Story</h2>
          </div>
          <div class="col-md-6">
            <p>Ridwan is an undergraduate student in one of university in Malang who has an interest at music. He and his friends saw that Malang is a potential city with people who are very enthusiastic about music. </p>
          </div>

          <div class="col-md-6">
            <p>He joins with some musicians to improve his knowledge about music and do some movement such as opening music studio and join some bands in Malang. After that, he looking something new, something great. So he founded iwan music production</p>
          </div>
        </div>

         

        <div class="row templateux-section">
          <div class="col-md-12 clearfix mb-5">
            <h2>Team</h2>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="block-38 ">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="<?=base_url()?>images2/team.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Ridwan Adi Kurniawan</h3>
                  <p class="block-38-subheading">CEO, Founder</p>
                </div>
                <div class="block-38-body">
                  <p><i>"Iwan Music Production is just the beginning, i want to make something more"</i></p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      </div>
    </section>
    <!-- END section -->


    

    <section class="templateux-section">


      <div class="container">
        <div class="row">
          <div class="col-md-12 clearfix mb-5" data-aos="fade-up">
            <h2>What we offer</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"  data-aos="fade-up" data-aos-delay="100">
            <div class="media templateux-media mb-4">
              <div class="mr-4 icon">
                <span class="icon-monitor display-3"></span>
              </div>
              <div class="media-body">
                    <h3 class="h5">Music Equipment</h3>
                    <p>We have various good quality and branded music equipment.</p>
                  </div>
            </div>
          </div>
          <div class="col-md-4"  data-aos="fade-up" data-aos-delay="200">
            <div class="media templateux-media mb-4">
              <div class="mr-4 icon">
                <span class="icon-command display-3"></span>
              </div>
              <div class="media-body">
                    <h3 class="h5">Lighting Stage</h3>
                    <p>Your event will be shined by our well quality lighting tools</p>
                  </div>
            </div>
          </div>
          <div class="col-md-4"  data-aos="fade-up" data-aos-delay="300">
            <div class="media templateux-media mb-4">
              <div class="mr-4 icon">
                <span class="icon-feather display-3"></span>
              </div>
              <div class="media-body">
                    <h3 class="h5">Rigging Stage</h3>
                    <p>We have some rigging stages that support your big event such as semi-rigging stage and full-rigging stage</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-4"  data-aos="fade-up" data-aos-delay="100">
            <div class="media templateux-media mb-4">
              <div class="mr-4 icon">
                <span class="icon-shopping-cart display-3"></span>
              </div>
             <div class="media-body">
                    <h3 class="h5">Multimedia</h3>
                    <p>We also provide multimedia gadgets such as camera, LCD projector, and many more </p>
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>  
    </section>

    <?php $this->load->view('new/footer') ?>

  </div>

  
 <?php $this->load->view('new/assets-js') ?>
  
  </body>
</html>