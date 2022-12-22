<?php
// session_start();
$_SESSION['login'] = true;

require_once 'views/includes/header.php';
require_once './autoload.php';
$bijoux = Instances::homeInstance();
?>
<div class="container ">
    <?php 
  include('./views/includes/alert.php');
  ?>
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
                <a href="<?php echo BASE_URL;?>add"  >
                <i class="fa-regular fa-plus"></i>
              </a>
             
               <a href="<?php echo BASE_URL;?>admin" class=" btn btn-primary ml-3">
               <i class="fa-solid fa-code-compare"></i>
              </a> 
              <a href="<?php echo BASE_URL;?>login" class=" btn btn-primary ml-3">
                <i class="fa fa-home"></i>
              </a> 
            
              <table class="table">
  <thead>
    <tr>
      <th scope="col">nom du produit</th>
      <th scope="col">prix</th>
      <th scope="col">quantite</th>
      <th scope="col">image</th>
      <th scope="col">update</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($bijoux as $bijoux): ?>
    <tr>
      <th scope="row"><?php echo $bijoux['nom_produit']; ?></th>
      <td><?php echo $bijoux['prix']; ?></td>
      <td><?php echo $bijoux['quantite']; ?></td>
      <td><img style="width: 60px;" src="./image/<?php echo $bijoux['image'];?>" alt="img"></td>
      <td>
        <!-- form d'icon update  -->
           <form method="post" class="mr-1" action="update">
            <!-- l'orsque on clic -> page update -->
                 <input type="hidden" name="id" value="<?php echo $bijoux['id'];?>">
                 <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button></td>
  <td >  
           </form>
                   <!-- form d'icon delete  -->
                   <form method="post" class="mr-1" action="delete">
                 <input type="hidden" name="id" value="<?php echo $bijoux['id'];?>">
                 <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
           </form>
           </td>
    </tr>
    <?php endforeach;?>




                  </tbody>
               </table>
              </div>
             </div>
        </div>

    </div>

</div>