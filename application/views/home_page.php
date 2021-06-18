
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







  <!-- =======================================================
  * Template Name: HIMS - v4.1.0
  * Template URL: https://bootstrapmade.com/HIMS-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

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
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
         
          <h1>Find Hospital Information as quick as possible</h1>
          <h2>We care your health and well being!</h2>
         <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto"></a>
            <a href="#" class="glightbox"></a>
          </div>-->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="homestyle/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">




<form action="views/hello_world" method="get">
<body>
 <div class="container">
  <br />
  <br />
  <h3 align="center">Search for hospitals here</h3>
  <!--<br />
  <div id="prefetch">
   <input type="text" name="search_box" id="search_box" class="form-control input-lg typeahead" placeholder="Search Here" />
  </div>-->
 </div>


<!--
<script>
$(document).ready(function(){
  var sample_data = new Bloodhound({
   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
   queryTokenizer: Bloodhound.tokenizers.whitespace,
   prefetch:'<?php echo base_url(); ?>home/fetch',
   remote:{
    url:'<?php echo base_url(); ?>home/fetch/%QUERY',
    wildcard:'%QUERY'
   }
  });
  

  $('#prefetch .typeahead').typeahead(null, {
   name: 'sample_data',
   display: 'name',
   source:sample_data,
   limit:10,
   templates:{
    suggestion:Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
   }
  });
});
</script>






<div class="row clearfix">

 <!--<div class="form-group">
            <label for="location">Location</label>
            <?php $attributes = 'class="form-control" id="location"';
            echo form_dropdown('location', $location, set_value('location'), $attributes); ?>
            <span class="text-danger"><?php echo form_error('location'); ?></span>
        </div>-->



  <div class="row clearfix">
     <?php $this->load->helper("form"); ?>
 <div class="col-md-6">
                    <label for="provider" class="control-label"><span class="text-danger">*</span>Provider Type</label>
                                <div class="form-group">
                                    <select name="provider" class="form-control">
                                     <option value="">look for</option>
                                     <option value="">Hospitals</option>
                                     <option value="">Specialists</option>
                                <?php 
                                foreach($all_provider as $provider)
                                {
                                    $selected = ($provider['provider'] == $this->input->post('provider')) ? ' selected="selected"' : "";
                                    echo '<option value="'.$provider['provider'].'" '.$selected.'>'.$provider['type'].'</option>';
                                } 
                                ?>
                                     </select>
                                   <span class="text-danger"><?php echo form_error('provider');?></span>
                                </div>
                        </div>
                     

              <div class="col-md-6">
                <select name="regions" id="regions" class="form-control input-lg">

                  <option value="">Select Region</option>
                     <?php
                   foreach($regions as $row)
                    {
                 echo '<option value="'.$row->region_id.'">'.$row->region_name.'</option>';
                   }
                     ?>
               </select>
              </div>
   </div>


<input type="submit" name="submit" value="Search" align="center">
</body>
</form>
</main>
<br>
<!--A part taht does put slide images-->

 <body style="background-color:white;">


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="resources/img/lab3.jfif" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="resources/img/doc2.jfif" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="resources/img/doc.jfif" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="resources/img/lab1.jfif" style="width:100%">
  <div class="text">Caption Four</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="resources/img/doc2.jfif" style="width:100%">
  <div class="text">Caption five</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

</body>















<!--<body>
 <div class="container box">
  <br />
  <br />
 <!-- <h3 align="center">Codeigniter Dynamic Dependent Select Box using Ajax</h3>-->
  <!--<br />
  <div class="form-group">
   <select name="regions" id="regions" class="form-control input-lg">
    <option value="">Select Region</option>
    <?php
   // foreach($regions as $row)
    {
    // echo '<option value="'.$row->region_id.'">'.$row->region_name.'</option>';
    }
    ?>
   </select>
  </div>
  <!--<br />
  <div class="form-group">
   <select name="hospital_info" id="hospital_info" class="form-control input-lg">
    <option value="">Select Hospital</option>
   </select>
  </div>
  <br />-->
  <!-- <div class="form-group">
   <select name="city" id="city" class="form-control input-lg">
    <option value="">Select City</option>
   </select>
  </div>
 </div> 
</body>
</html>
<script>
$(document).ready(function(){
 $('#regions').change(function(){
  var region_id = $('#regions').val();
  if(region_id != '')
  {
   $.ajax({
    url:"<?php //echo base_url(); ?>home_page/fetch_hospital_info",
    method:"POST",
    data:{region_id:region_id},
    success:function(data)
    /*{
     $('#hospital_info').html(data);
    // $('#tbl_specialization').html('<option value="">Select specialization</option>');
    }
   });
  }
  else
  {
   $('#hospital_info').html('<option value="">Select Hospital</option>');
   //$('#tbl_specialization').html('<option value="">Select specialization</option>');
  }
 });

 $('#hospital_info').change(function(){
  var hospital_id = $('#hospital_info').val();
  if(hospital_id != '')
  {
   $.ajax({
    url:"<?php //echo base_url(); ?>home_page/fetch_tbl_specialization",
    method:"POST",
    data:{hospital_id:hospital_id},
    success:function(data)
    {
     $('#tbl_specialization').html(data);
    }
   });
  }
  else
  {
   $('#tbl_specialization').html('<option value="">Select specialization</option>');
  }
 });
 
});
</script>-->













 <!--<body>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">Live Data Search in Codeigniter using Ajax JQuery</h2><br />
   <div class="form-group">
    <form id="region_form"  method="POST">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" id="region" oninput="load_data()" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
  </form>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />
 </body>-->




















<br>
<h3 align="center">Other services</h3>

<body>


<a href="<?php echo base_url() ;?>index.php/Hello/newFunction">
    <img src="<?php echo base_url() ;?>resources/img/hospitalIcon1.jpg">
</a>


<!--<?php echo anchor('Autocomplete/index','<img src="resources/img/iconServices.jfif"  /> ','class="btn btn-default btn-flat"')?>-->

<a href="<?php echo base_url() ;?>index.php/Hello/newFunction">
    <img src="<?php echo base_url() ;?>resources/img/iconServices.jfif">
</a>

<a href="<?php echo base_url() ;?>index.php/Hello/newFunction">
    <img src="<?php echo base_url() ;?>resources/img/specialistIcon.jpg">
</a>

</body>


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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/HIMS-free-bootstrap-html-template-corporate/ -->
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

<script>
   function load_data(query)
 {


  $.ajax({
     method: 'post',
    processData: false,
    contentType: false,
    cache: false,
    enctype: 'multipart/form-data',
   url:"<?php echo base_url('show_region'); ?>",
   type:"POST",
   data:new FormData(document.getElementById('region_form')),
   success:function(data){
    console.log(data)
    // $('#result').html(data);
   }
  })
 }

 
</script>

<script>
$(document).ready(function(){
 $('#regions').change(function(){
  var region_id = $('#regions').val();
  if(region_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>home_page/fetch_hospital_info",
    method:"POST",
    data:{region_id:region_id},
    success:function(data)
    /*{
     $('#hospital_info').html(data);
    // $('#tbl_specialization').html('<option value="">Select specialization</option>');
    }
   });
  }
  else
  {
   $('#hospital_info').html('<option value="">Select Hospital</option>');
   //$('#tbl_specialization').html('<option value="">Select specialization</option>');
  }*/
 });

 /*$('#hospital_info').change(function(){
  var hospital_id = $('#hospital_info').val();
  if(hospital_id != '')
  {
   $.ajax({
    url:"<?php //echo base_url(); ?>home_page/fetch_tbl_specialization",
    method:"POST",
    data:{hospital_id:hospital_id},
    success:function(data)
    {
     $('#tbl_specialization').html(data);
    }
   });
  }
  else
  {
   $('#tbl_specialization').html('<option value="">Select specialization</option>');
  }
 });*/
 
});
</script>


</body>

</html>
