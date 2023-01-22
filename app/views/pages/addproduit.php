<?php require APPROOT . '/views/inc/header.php'; ?>

<body>

    <style>
        .error {
            border: 1.4px solid red;
            padding: 6px;
        }

        .success {
            border: 1.4px solid green;
            padding: 6px;
        }

        span {
            color: red;
            font-size: 13px;
        }
        .hidden{
            display:none;
        }
    </style>
    <a href="<?php echo URLROOT; ?>/pages/adminproduit" class="btn btn-warning" style="margin-top: 10px;"><i class="fa fa-backward"></i>Back</a>

    <div class="card card-body bg-light mt-5">


        <h2>Add product</h2>
        <p>Cration of new product</p>
        <form action="<?php echo URLROOT; ?>/produits/add" method="post" id="form">
            <div class="form-group">
                <label for="libelle_produit">libelle_produit: </label>
                <input type="text" name="libelle_produit" class="form-control form-control-lg" id="libelle_produit">
                <span id="libelle_produit_error"></span>
            </div>

            <div class="form-group">
                <label for="quantite_produit">quantite: </label>
                <input type="number" name="quantite_produit" class="form-control form-control-lg" id="quantite_produit">
                <span id="quantite_produit_error"></span>
            </div>

            <div class="form-group">
                <label for="price_produit">price: </label>
                <input type="number" name="price_produit" class="form-control form-control-lg" id="price_produit">
                <span id="price_produit_error"></span>
            </div>


            <div class="form-group">
                <label for="img_produit">image: </label>
                <input type="file" name="img_produit" class="form-control form-control-lg" id="img_produit">
                <span id="img_produit_error"></span>
            </div>   
            <!-- <input type="submit" class="btn btn-success btn-block" value="Add"> -->
            <button style="width: 200px; padding: 10px 10px 10px 0px; margin-top:10px margin-left:100px" type="submit"  class="btn btn-success btn-block" > Add </button>

            <!-- <input style="width: 200px; padding: 10px 10px 10px 0px;" type="submit" id="btn" class="btn btn-warning btn-block" value=" Add another product "> -->
            <!-- <input style="width: 100px; padding: 10px 10px 10px 0px;" type="submit" id="btn"  class="btn btn-warning btn-block" value="Add All "> -->
            <a  style="width: 200px; padding: 10px 10px 10px 0px; margin-top:10px" type="button" id='' class="btn btn-warning btn-block" value=" "> Add another product</a>

        </form>
    </div>

        <div class="card card-body bg-light mt-5">



<form action="" method="" id="form2" class="hidden" >
    <div class="form-group">
        <label for="libelle_produit">name of product: </label>
        <input type="text" name="libelle_produit" class="form-control form-control-lg" id="libelle_produit2">
        <span id="libelle_produit_error2"></span>
    </div>

    <div class="form-group">
        <label for="quantite_produit">quantite: </label>
        <input type="number" name="quantite_produit" class="form-control form-control-lg" id="quantite_produit2">
        <span id="quantite_produit_error2"></span>
    </div>

    <div class="form-group">
        <label for="price_produit">price: </label>
        <input type="number" name="price_produit" class="form-control form-control-lg" id="price_produit2">
        <span id="price_produit_error2"></span>
    </div>


    <div class="form-group">
        <label for="img_produit">image: </label>
        <input type="file" name="img_produit" class="form-control form-control-lg" id="img_produit2">
        <span id="img_produit_error2"></span>
    </div>
    <input type="submit"  class="btn btn-success btn-block" value="Add">
    <input style="width: 100px; padding: 10px 10px 10px 0px;" type="submit" id="btn2"  class="btn btn-warning btn-block" value="Add All ">
</form>
        <!-- <script src="<?php echo URLROOT; ?>../js/addproduit.js"></script> -->

        </div>


    </body>




























    <!-- section du pide de la page -->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->

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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>


</body>