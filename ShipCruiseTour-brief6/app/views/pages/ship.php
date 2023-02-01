<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


  <title>
    <?php echo SITENAME; ?>
  </title>
  <style>
    body {}

    main {
      position: relative;
      padding: 1rem 1rem 3rem;
      min-height: calc(100vh - 4rem);
    }

    h1 {
      margin-top: 0;
    }

    .hidden {
      display: none;
    }

    .pagination-container {
      width: calc(100% - 2rem);
      display: flex;
      align-items: center;
      position: absolute;
      bottom: 0;
      padding: 1rem 0;
      justify-content: center;
    }

    .pagination-number,
    .pagination-button {
      font-size: 1.1rem;
      background-color: transparent;
      border: none;
      margin: 0.25rem 0.25rem;
      cursor: pointer;
      height: 2.5rem;
      width: 2.5rem;
      border-radius: .2rem;
    }

    .pagination-number:hover,
    .pagination-button:not(.disabled):hover {
      background: #fff;
    }

    .pagination-number.active {
      color: #fff;
      background: #0085b6;
    }

    footer {
      padding: 1em;
      text-align: center;
      background-color: #FFDFB9;
    }

    footer a {
      color: inherit;
      text-decoration: none;
    }

    footer .heart {
      color: #DC143C;
    }

    @media (max-width: 600px) {
      nav {
        bottom: -2711px;
      }

      .row h3 {
        margin-left: 32px;
      }
    }
  </style>

</head>


<body>

  <!--NAVIGATION-->
  <?php require APPROOT . '/views/inc/navbar.php'; ?>




  <div style="justify-content: space-evenly !important;" class="selects">

    <div>
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">mois
        <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <?php for ($i = 1; $i <= 12; $i++) { ?>

          <li style="color: black;"><a href="<?php echo URLROOT; ?>/pages/ship_filter_month/<?php echo $i ?>" value=""
              selected><?php echo $i ?></a></li><br>
        <?php } ?>

      </ul>
    </div>
    <div>
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">port
        <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <?php foreach ($data['port'] as $port): ?>
          <li style="color: black;"><a href="<?php echo URLROOT; ?>/pages/ship_filter_port/<?php echo $port->id ?>"
              value="" selected><?php echo $port->nom ?></a></li><br>
        <?php endforeach ?>

      </ul>
    </div>

    <div>
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">navire
        <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <?php foreach ($data['navire'] as $navire): ?>
          <li style="color: black;"><a href="<?php echo URLROOT; ?>/pages/ship_filter_navire/<?php echo $navire->id ?>"
              value="" selected><?php echo $navire->nom ?></a></li><br>
        <?php endforeach ?>

      </ul>
    </div>
  </div>




  <!-- ::::::::::::::::::::::::::::::: -->

  <div id="pricing" class="pricing">
    <?php flash('register_success'); ?>
    <div data-aos="zoom-in-up" class="container">
      <div class="row" id="paginated-list" data-current-page="1" aria-live="polite">
        <?php if ($data['croisier']): foreach ($data['croisier'] as $croisier): ?>
            <div class="col-lg-3 col-md-3 wow flipInY itemPaginate">
              <div class="packages">
                <div><img style=" height: 250px ; width: 100%; border-radius: 5px; "
                    src="<?= URLROOT . '/img/' . $croisier->image ?>" alt=""></div>
                <h5 style="margin-top: 50px;">
                  <?php echo $croisier->navire_nom; ?>
                </h5>
                <li>prix min:
                  <?php echo $croisier->prix; ?>
                </li>
                <li>nombre de nuits:
                  <?php echo $croisier->nombre_nuit; ?>
                </li>
                <li>
                  <?php echo $croisier->port_nom; ?>
                </li>
                <li></li>
                <hr>
                <li>
                  <?php echo $croisier->itenaire1; ?>/
                  <?php echo $croisier->itenaire2; ?>/
                  <?php echo $croisier->itenaire3; ?>
                </li>
                <li>depart :
                  <?php echo $croisier->date_depart; ?>
                </li>
                <form action="" method="post">
                  <input style="display: none;" type="text" name="croisier" value="<?php echo $croisier->crId; ?>">
                  <input style="display: none;" type="text" name="prix" value="<?php echo $croisier->prix; ?>"></br>
                  <select style="width: 100%;margin-bottom: 1rem !important;" class="form-control form-control-lg "
                    name="room" aria-label="Default select example"></br>
                    <option value="1" selected>Solo /
                      <?php echo ($croisier->prix + 0) ?>$
                    </option></br>
                    <option value="2">room for two /
                      <?php echo ($croisier->prix + 100) ?>$
                    </option></br>
                    <option value="3">Family room /
                      <?php echo ($croisier->prix + 300) ?>$
                    </option></br>
                  </select>
                  <input type="submit" name="submit" class="btn btn-success" value="reserve now!">
                </form>
              </div>
            </div>
          <?php endforeach;
        else: ?>
          <h3 style="margin-left:350px ; color: #fff;">aucune croisiere avec c'est donnees !</h3>
        <?php endif; ?>
      </div>



    </div>
    <nav style=" position:absolute  ; bottom: -480px;" class="pagination-container">
      <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
        &lt;
      </button>

      <div id="pagination-numbers">

      </div>

      <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
        &gt;
      </button>
    </nav>
   
  </div>
 

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-white text-muted">

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
   
    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
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

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
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
      © 2023 Copyright by:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">nezha lemnissir</a>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js">
  <!-- <script src="./pagination.js"></script> -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    // alert('aucune croisiere !')
    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("paginated-list");
    const listItems = paginatedList.querySelectorAll(".itemPaginate");
    const nextButton = document.getElementById("next-button");
    const prevButton = document.getElementById("prev-button");

    const paginationLimit = 4;
    const pageCount = Math.ceil(listItems.length / paginationLimit);
    let currentPage = 1;

    const disableButton = (button) => {
      button.classList.add("disabled");
      button.setAttribute("disabled", true);
    };

    const enableButton = (button) => {
      button.classList.remove("disabled");
      button.removeAttribute("disabled");
    };

    const handlePageButtonsStatus = () => {
      if (currentPage === 1) {
        disableButton(prevButton);
      } else {
        enableButton(prevButton);
      }

      if (pageCount === currentPage) {
        disableButton(nextButton);
      } else {
        enableButton(nextButton);
      }
    };

    const handleActivePageNumber = () => {
      document.querySelectorAll(".pagination-number").forEach((button) => {
        button.classList.remove("active");
        const pageIndex = Number(button.getAttribute("page-index"));
        if (pageIndex == currentPage) {
          button.classList.add("active");
        }
      });
    };

    const appendPageNumber = (index) => {
      const pageNumber = document.createElement("button");
      pageNumber.className = "pagination-number";
      pageNumber.innerHTML = index;
      pageNumber.setAttribute("page-index", index);
      pageNumber.setAttribute("aria-label", "Page " + index);

      paginationNumbers.appendChild(pageNumber);
    };

    const getPaginationNumbers = () => {
      for (let i = 1; i <= pageCount; i++) {
        appendPageNumber(i);
      }
    };

    const setCurrentPage = (pageNum) => {
      currentPage = pageNum;

      handleActivePageNumber();
      handlePageButtonsStatus();

      const prevRange = (pageNum - 1) * paginationLimit;
      const currRange = pageNum * paginationLimit;

      listItems.forEach((item, index) => {
        item.classList.add("hidden");
        if (index >= prevRange && index < currRange) {
          item.classList.remove("hidden");
        }
      });
    };

    window.addEventListener("load", () => {
      getPaginationNumbers();
      setCurrentPage(1);

      prevButton.addEventListener("click", () => {
        setCurrentPage(currentPage - 1);
      });

      nextButton.addEventListener("click", () => {
        setCurrentPage(currentPage + 1);
      });

      document.querySelectorAll(".pagination-number").forEach((button) => {
        const pageIndex = Number(button.getAttribute("page-index"));

        if (pageIndex) {
          button.addEventListener("click", () => {
            setCurrentPage(pageIndex);
          });
        }
      });
    });
  </script>
</body>

</html>