<?php

$_SESSION['login'] = true;

require_once 'views/includes/header.php';
require_once './autoload.php';

   Instances::addInstance();
   include_once './views/includes/navbar.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
             <div class="card">
              <div class="card-body bg-light mt-5">
               <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondery mr-2 mb-2">
                <i class="fa fa-home"></i>
              </a> 
              <div class="form">
            <!-- <a href="../gestion.php?id=" class="back_btn"><i class='bx bx-arrow-back'></i></a> -->
            <h2>Ajouter un produit</h2>
           
            <form enctype="multipart/form-data" action="" method="POST">
                <label class="form-text">Nom du produit</label>
                <input class="form-control" type="text" name="nom_produit" required>
                <label class="form-text">prix</label>
                <input  class="form-control" type="text" name="prix" required>
                <label class="form-text">quantité</label>
                <input  class="form-control" type="number" name="quantite" required>
                <label class="form-text">image</label>
          
                <input  class="form-control" id="add_img_input" name='image' type="file" accept="image/png, image/jpg, image/gif, image/jpeg,image/jfif" />
                <input type="submit" value="Ajouter" name="submit"  class="btn btn-primary mt-3">
            </form>
        </div>
                </div>
             </div>
        </div>

    </div>

</div>

    
</body>