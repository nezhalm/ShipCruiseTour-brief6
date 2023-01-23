<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kasper | Template Two</title>
  <!-- Render All Elements Normally -->
  <link rel="stylesheet" href="css/normalize.css" />
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="css/all.min.css" />
  <!-- Main Template CSS File -->

  <link rel="stylesheet" href="<?php echo URLROOT; ?>./css/table.css">
  <!-- Google Fonts -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <?php require APPROOT . '/views/inc/navbar.php'; ?>

 
</head>

<body  >



 
<div  class="filter"></div>
 <table style=" " >



 <tr>


 <th>mane of product</th>

 <th>quantity</th>

 <th>price </th>

 <th>image </th>

 <th>date d'ajout</th>
 <th><a  href="<?php echo URLROOT; ?>/pages/stat" class="btn btn-light" style="margin-top: 10px; z-index: -1;">back</a></th>

 </tr>

 <?php if ($data['produit']) :
                foreach ($data['produit'] as $produit) : ?>
                  <tr>

                    <td>
                      <?php echo $produit->libelle_produit; ?>
                    </td>
                    <td><?php echo $produit->quantite_produit; ?></td>
                    <td>
                      <?php echo $produit->price_produit; ?>
                    </td>

                    <td>
                      <img style="border-radius: 10px;" src="<?php echo URLROOT . '/img/' . $produit->img_produit; ?>" width="80px" height="80px">
                    </td>
                   

                    <td>
                      <?php echo $produit->date_ajout; ?>
                    </td>

                  
                  </tr>
                <?php endforeach;
              else : ?>
                <script>
                   alert('aucune produit !')
                </script>
                <h3>aucun produit !</h3>
              <?php endif; ?>
 </table>
 
  
 </body>
