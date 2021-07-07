
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>THIMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="homestyle/img/favicon.png" rel="icon">
  <link href="homestyle/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="homestyle/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>homestyle/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>homestyle/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>homestyle/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>homestyle/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>homestyle/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>homestyle/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>homestyle/css/style.css" rel="stylesheet">



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">THIMS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a  href="<?php echo base_url();?>login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 </head>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row" style="width: 100% ">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" style="width: 100% ">
         
          <h1 class="display-3" style="width: 100% ">TANZANIA HOSPITAL INFORMATION MANAGEMENT SYSTEM(THIMS)</h1>
          <h2>We care your health and well being!Find Hospital Information as quick as possible</h2>
         
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="homestyle/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
<body>



  <main id="main" style="padding: 20px">


<style>
 .box
 {
  width:100%;
  max-width: 650px;
  margin:0 auto;
 }
 </style>


 <div class="row" class="d-flex align-items-center" >
 <?php 
  foreach ($results as $row) {?>
 
<div class ='col-sm-3 ' style="padding: 20px">

  <div class="card" >
  <div class="card-body">
  <h5 class="card-title"><?php echo $row['service_name']?></h5>
    <td><?php echo $row['service_category']?></td>
    <td><?php echo $row['service_name']?></td>
    <td><?php echo $row['name']?></td>
    <a href="<?php echo base_url()?>hospital_profile/<?php echo $row['id']?>" class="card-link">View hospital profile</a>
 
  </div>
</div>

</div>


<?php }
?>
 </div>
</body>
</html>
<script>
$(document).ready(function(){
 $('#regions').change(function(){
  var region_id = $('#regions').val();
  
 });

$(document).ready(function(){
 $('#hospital_ownership').change(function(){
  var ownership_id = $('#hospital_ownership').val();
});

$(document).ready(function(){
 $('#hospital_ownership').change(function(){
  var ownership_id = $('#hospital_ownership').val();
});


 
});
</script>
 </div>
</body>


</main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>THIMS</h3>
            <p>
              Sayansi<br>
              Dar es Salaam<br>
              Tanzania <br><br>
              <strong>Phone:</strong> +255753926697<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

         

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Specialists</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hospitals</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Visit us on social media through the following links</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>THIMS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="#">Julieth Kimaro</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>homestyle/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>homestyle/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>homestyle/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>homestyle/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>homestyle/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>homestyle/vendor/waypoints/noframework.waypoints.js"></script>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" /> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
 <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>

  <!-- Template Main JS File -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="<?php echo base_url(); ?>homestyle/js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>

</html>
