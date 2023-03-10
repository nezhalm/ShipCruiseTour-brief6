

 
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<?php

require APPROOT . '/views/inc/header.php';?>
  <a href="<?php echo URLROOT; ?>/pages/admincroisier" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Add Post</h2>
    <p>Create a new croisier</p>
    <form action="<?php echo URLROOT; ?>/croisiers/add" method="post">

    <div class="form-group">
            <label for="email">date de reservation</label>
        <input type="date" name="date_depart" class="form-control form-control-lg <?php echo (!empty($data['date_depart_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $_SESSION['date_depart']; ?>">
            <span class="invalid-feedback"><?php echo $data['date_depart_err']; ?></span>
          </div>

          <div class="form-group">
            <label for="text">croisier</label>
            <input type="number" name="id" class="form-control form-control-lg <?php echo (!empty($data['cruise_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $croisier['id']; ?>">
            <span class="invalid-feedback"><?php echo $data['prix_err']; ?></span>
          </div>

     
          <div class="form-group">
            <label for="email">prix de reservation </label>
            <input type="number"  name="prix" class="form-control form-control-lg <?php echo (!empty($data['nombre_nuit_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $croisier['prix']; ?>">
            <span class="invalid-feedback"><?php echo $data['prix_err']; ?></span>
          </div>

      

      

          <div>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">port
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  <?php foreach ($data['chambre'] as $chambre): ?>
  <li style="color: black;"><a href="<?php echo URLROOT; ?>/pages/ship_filter_chambre/<?php echo $chambre->id ?>" value="" selected><?php echo $chambre->num_chambre ?></a></li><br>
  <?php endforeach?>
  
  </ul></div>

      
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>

  <!-- ::::::::::::::::::::::::::::::::::::::::::::::::: -->
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
    ?? 2021 Copyright:
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
