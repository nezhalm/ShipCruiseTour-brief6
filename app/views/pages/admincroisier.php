<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;1,300;1,400;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo URLROOT; ?>../css/style1.css">
  <title><?php echo SITENAME; ?></title>
  

</head>

<?php
// session_start();
$_SESSION['login'] = true;
require APPROOT . '/views/inc/navbar.php';
;
// $croisier= Croisiers::index();

?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="<?php echo URLROOT; ?>/pages/admin">reservation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo URLROOT; ?>/ports/index">port</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="<?php echo URLROOT; ?>/navires/index">navire</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active " href="<?php echo URLROOT; ?>/croisiers/index">croisier</a>
  </li>
</ul>


<div class="container ">
 
    <div class="row mt-4">
    
        <div class="col-md-10 mx-auto">
     
             <div class="card"> 
          
              <div class="card-body bg-light">    
      <!-- ==recherche============================== -->
      <form method="post" class="float-right d-flex flex-row mb-2 ">
           <input type="text" name="search" placeholder="recherche un produit">
             <button class="btn btn-info btn-sm ml-2" name="find" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <!-- =============================================== -->
                <a href="<?php echo URLROOT; ?>/croisiers/add"  >
                <i class="fa-regular fa-plus"></i>
                </a>
             
                <a href="<?php echo URLROOT; ?>/posts/admin" class=" btn btn-primary ml-3">
                <i class="fa-solid fa-code-compare"></i>
                </a> 

                <a href="<?php echo URLROOT; ?>/pages/index" class=" btn btn-primary ml-3">
                <i class="fa fa-home"></i>
                </a>               
  <table class="table">
           <thead>
              <tr>
                <th scope="col">nom du client</th>
                <th scope="col">date de depart</th>
                <th scope="col">port de depart</th>
                <th scope="col">nombre de nuits</th>
                <th scope="col">prix</th>
                <th scope="col">navire</th>
                <th scope="col">image</th>
                <th scope="col">delete</th>
                <!-- <th scope="col">delete</th> -->
              </tr>
        </thead>
        <tbody> 
        
      <?php if($data['croisier']) : foreach ($data['croisier'] as $croisier): ?>
      
   <tr>
      <th scope="row"><?php echo $_SESSION['user_name']; ?></th>
      <td><?php echo $croisier->date_depart; ?></td>
      <td><?php echo $croisier->port_nom; ?></td>
      <td><?php echo $croisier->nombre_nuit; ?></td>
      <td><?php echo $croisier->prix; ?></td>
      <td><?php echo $croisier->navire_nom; ?></td>

      <td><img style="width: 54px;margin: auto;height: 43px;" src="<?php echo URLROOT.'/img/'. $croisier->image;?>" alt="img"></td>
     
      <td>

                 <a class="btn btn-sm btn-warning" href="<?php echo URLROOT ?>/croisiers/delete/<?php echo $croisier->id?>" ><i class="fa fa-trash"></i></a>
              
      </td>
    </tr>
    <?php endforeach; else :?>
      <script>
        // alert('aucune croisiere !')
      </script> <h3>aucune croisiere !</h3>
      <?php endif;?>
   

 </tbody>
     
 </table>
                    </div>
                  </div>
              </div>

          </div>

</div>