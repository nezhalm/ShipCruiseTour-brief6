<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <link rel="stylesheet" href="<?php echo URLROOT; ?>./css/style1.css">
  <title><?php echo SITENAME; ?></title>
  

</head>
<body>
  <?php require APPROOT . '/views/inc/navbar.php';?>

<!--  -->
<div style="margin-top: -20px;" id="header" class="header">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-6 wow bounceInLeft">
                 <h1>Votre pharmacie en ligne</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                 <button class="btn btn-lg btn-primary">view more!</button>
                 <button class="btn btn-lg btn-success">View Detail</button>
             </div>
             <!-- <div class="col-lg-6 col-md-6 wow bounceInRight">
                 <img src="./images/5.jpg" alt="">
             </div> -->
         </div>
     </div>
 </div>


<!--  -->
<!--  -->

<div id="services" class="services">
     <div class="container">
         <h2 class="wow fadeInUp">Services</h2>
         <p class="wow fadeInUp" data-wow-delay="0.4">Lorem Ipsum is simply dummy text of the printing and typesettin dummy text</p>
         <div class="row">
             <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
                 <i class="fa fa-desktop" aria-hidden="true"></i>
                 <h4>web design</h4>
                 <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
             </div>
             <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
                 <i class="fa fa-mobile" aria-hidden="true"></i>
                 <h4>Mobile Apps</h4>
                 <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
             </div>
             <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                 <i class="fa fa-database" aria-hidden="true"></i>
                  <h4>Database</h4>
                 <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
             </div>
             <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                 <i class="fa fa-university" aria-hidden="true"></i>
                 <h4>Consulting</h4>
                 <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
             </div>
         </div>
     </div>
 </div>
<!--  -->

<section class="equipe-section">
    <div class="equipe-text-box">
      <h5>LE CABINET ET L’ÉQUIPE</h5>
      <h2>Cabinet de Chirurgie Orthopédique et Traumatologie</h2>
      <p class="text-box-p">L’emplacement idéal du cabinet à proximité du centre ville, son décor moderne et ses
        équipements à la pointe permettent d’assurer un diagnostic pointu et une meilleure prise en charge du patient.
      </p>
      <p class="text-box-sec-p">
        <i class="fas fa-check"></i>
        Une équipe veillant assidûment au bon fonctionnement du cabinet médical
      </p>
      <p class="text-box-sec-p">
        <i class="fas fa-check"></i>
        Un médecin disponible et dévoué à ses patients
      </p>
    </div>
    <div class="photos-section">
      <div class="equipe-image-box">
        <img src="<?php echo URLROOT?>/img/1.jpg" alt="dr rahbani">
        <img src="<?php echo URLROOT?>/img/2.jpg" alt="equipe dr REHBANI">
      </div>
      <div class="equipe-image-box">
        <img src="<?php echo URLROOT?>/img/3.jpg" alt="cabinet dr REHBANI">
        <img src="<?php echo URLROOT?>/img/5.jpg " alt="cabinet dr REHBANI">
      </div>
    </div>

  </section>
<!--  -->


<!--  -->

  
<footer  style="padding-top: -20px;" class="text-center text-lg-start bg-white text-muted">

  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
  
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
   
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="design/js/main.js"></script>
</body>
</html>
