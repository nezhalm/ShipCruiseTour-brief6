  <?php require APPROOT . '/views/inc/header.php'; ?>
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
</style>



    <div class="container">
        <div class="row mt-4">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body bg-light">

                        <div class="form">
                            <h2>modifier un produit</h2>

                            <form enctype="multipart/form-data" action="<?php echo URLROOT; ?>/produits/edit/<?php echo $data['id_produit'];  ?>" method="post" id="form">
                                <div>
                                    <label class="form-text">nom du produit</label>
                                    <input class="form-control" type="text" name="libelle_produit" id="libelle_produit" value="<?php echo $data['libelle_produit'];  ?>">
                                    <span id="libelle_error"></span>
                                </div>
                                <label class="form-text">prix</label>
                                <input class="form-control"  type="number" min="1" name="price_produit" id="price_produit" value="<?php echo $data['price_produit']; ?>" required >
                                <span id="price_error"></span>
                                <label class="form-text">quantité</label>
                                <input class="form-control"  type="number" min="1"  name="quantite_produit" id="quantite_produit" value="<?php echo $data['quantite_produit'];  ?>" required>
                                <span id="quantite_error"></span>
                                <label class="form-text">image </label>
                                <div>

                                    <img style="width: 60px;" id="img_produit" src="<?php echo URLROOT . '/img/' . $data['img_produit']; ?>">
                                </div>
                                <input style="width: 400px;" class="form-control" id="img_produit" name='img_produit' type="file" accept="image/png, image/jpg, image/gif, image/jpeg" value=<img style="width: 60px;" src="<?php echo URLROOT . '/img/' . $data['img_produit']; ?>"  alt="img">
                                <span id="image_error"></span>
                                <div class="row">
            <div class="col">
              <input  type='submit' value="UPDATE" id="btn" class="btn btn-success btn-block" >
            </div>

          </div>


                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="<?php echo URLROOT; ?>../js/updateproduit.js"></script>

</body>