<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;1,300;1,400;1,800;1,900&display=swap"
    rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="<?php echo URLROOT; ?>../css/style1.css">
  <title>
    <?php echo SITENAME; ?>
  </title>


</head>

<?php
// session_start();
$_SESSION['login'] = true;
require APPROOT . '/views/inc/navbar.php';
?>




<div class="container ">

  <div class="row mt-4">

    <div class="col-md-10 mx-auto">

      <div class="card">
        <?php flash('register_success'); ?>
        <div class="card-body bg-light">
          <!-- ==recherche============================== -->
          <form action="<?php echo URLROOT; ?>/produits/searchProduit" method="post"
            class="float-right d-flex flex-row mb-2 ">
            <input type="text" name="search" placeholder="recherche un produit">
            <button class="btn btn-info btn-sm ml-2" name="submit" type="submit"><i class="fas fa-search"></i></button>
          </form>
          <!-- =============================================== -->

          <a href="<?php echo URLROOT; ?>/produits/add">
            <i class="fa-regular fa-plus"></i>
          </a>


          <div style="display: flex; ">
            <div class="dropdown" style="margin-top: 10px; margin-bottom: 10px;  margin-right: 10px; ">
              <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                tri par prix
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="<?php echo URLROOT; ?>/produits/tridecroissant" class="dropdown-item"
                  type="button">decroissant</a>
                <a href="<?php echo URLROOT; ?>/produits/tricroissant" class="dropdown-item" type="button">croissant</a>
              </div>
            </div>

            <div class="dropdown" style="margin-top: 10px; margin-bottom: 10px;">
              <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                tri par date d'ajout
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="<?php echo URLROOT; ?>/produits/tridecroissant_date" class="dropdown-item"
                  type="button">decroissant</a>
                <a href="<?php echo URLROOT; ?>/produits/croissant_date" class="dropdown-item"
                  type="button">croissant</a>
              </div>
            </div>
          </div>

          <table class="table">

            <thead>
              <tr>
                <th scope="col">name of product</th>
                <th scope="col">quantity </th>
                <th scope="col">price</th>
                <th scope="col">image</th>
                <th scope="col">date d'ajout</th>
                <th scope="col">delete</th>
                <th scope="col">edit</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($data['produit']):
                foreach ($data['produit'] as $produit): ?>
                  <tr>

                    <td>
                      <?php echo $produit->libelle_produit; ?>
                    </td>
                    <td>
                      <?php echo $produit->quantite_produit; ?>
                    </td>
                    <td>
                      <?php echo $produit->price_produit . " $"; ?>
                    </td>

                    <td>
                      <img src="<?php echo URLROOT . '/img/' . $produit->img_produit; ?>" width="80px" height="80px"
                        style="border-radius: 10px;">
                    </td>


                    <td>
                      <?php echo $produit->date_ajout; ?>
                    </td>

                    <td> <a class="btn btn-sm btn-warning"
                        onclick="deletItem('<?php echo URLROOT ?>/produits/delete/<?php echo $produit->id_produit ?>')"><i
                          class="fa fa-trash"></i></a>

                    </td>
                    <td> <a class="btn btn-dark"
                        href="<?php echo URLROOT ?>/produits/edit/<?php echo $produit->id_produit ?>"><i
                          class="fa fa-edit"></i></a>
                    </td>


                    </td>
                  </tr>
                <?php endforeach;
              else: ?>
                <script>
                  alert('aucune produit !')
                </script>
                <h3>product doesn't exist !</h3>
              <?php endif; ?>

            </tbody>

          </table>

        </div>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script>

    function deletItem(link) {
      Swal.fire({
        title: 'Are you sure?',
        text: "if you sure click on delete",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: 'red',
        confirmButtonText: 'Yes, Delete !'
      }).then((result) => {
        if (result.isConfirmed) {
          location.href = link;
        }
      })
    }

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
</div>