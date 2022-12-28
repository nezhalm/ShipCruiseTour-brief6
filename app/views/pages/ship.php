<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo URLROOT; ?>../css/style1.css">
  
  <title><?php echo SITENAME; ?></title>
</head>

<body>
    <!--NAVIGATION-->
    <?php require APPROOT . '/views/inc/navbar.php';?>


        
    
    <div style="justify-content: space-evenly !important;" class="selects">
    <!-- <select class="selectpicker">
        <option selected disabled>Type de chambre</option>
        <option>Pour 1 personne</option>
        <option>Pour 2 personnes</option>
        <option>Pour 3 à 6 personnes</option>
    </select> -->
    <select class="selectpicker">
        <option selected disabled>Mois</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
    </select>
    <select class="selectpicker">
        <option selected disabled>Narive</option>
        <option>Zodiac</option>
        <option>Riva</option>
        <option>Bayliner</option>
        <option>Capelli</option>
        <option>Sea-Ray</option>
    </select>
    <select class="selectpicker">
        <option selected disabled>Port</option>
        <option>Maroc</option>
        <option>Canada</option>
        <option>California</option>
        <option>Suisse</option>
        <option>Paris</option>
    </select>
   
</div>


<!-- ::::::::::::::::::::::::::::::: -->
<div id="pricing" class="pricing">
    <div class="container">
        <div class="row">
          
            <p class="wow fadeInUp" ></p>
            <div class="col-lg-3 col-md-3 wow flipInY" >
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/bb.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success" >reserve now!</button>
                
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/cc.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                 
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY">
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/dd.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/ee.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY" >
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/ff.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/ee.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY">
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/ll.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/mm.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------- -->

<div id="pricing" class="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 wow flipInY">
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/aa.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/nn.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY" >
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/bb.jfif"alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/dd.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY" >
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/ee.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/ll.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY" >
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/mm.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/cc.jfif" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- ------------------------------------ -->
<div id="pricing" class="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 wow flipInY">
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY" >
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <a href="#"><button class="btn btn-success">reserve now!</button></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY">
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 wow flipInY">
            <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                <div class="packages">
                <div><img style=" height: 200px ; width: 100%; " src="../img/6.jpg" alt=""></div>
                    <h4>Bronze</h4>
                    <h1>100 $</h1>
                    <b>nombre de nuits:3 jours</b>
                    <p>port de depart:casablanca</p>
                    <hr>
                    <li>casa,turki,malizia</li>
                    <li>date de depart:11/12/2023</li>
                    
                    <button class="btn btn-success">reserve now!</button>
                </div>
                
            </div>
        </div>
    </div>
</div>

                   


<!-- ::::::::::::::::::::::::::::::: -->

<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js">

</body>
</html>

