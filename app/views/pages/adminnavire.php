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

require APPROOT . '/views/inc/navbaradmin.php';
?>

<ul class="nav nav-tabs">

  <li class="nav-item">
    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/adminport">port</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="<?php echo URLROOT; ?>/croisiers/adminnavire">navire</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo URLROOT; ?>/croisiers/addcroisier">croisier</a>
  </li>
</ul>


<div class="container ">

    <div class="row mt-4">

        <div class="col-md-10 mx-auto">

             <div class="card">
             <?php flash('register_success');?>
              <div class="card-body bg-light">
      <!-- ==recherche============================== -->

      <!-- =============================================== -->
                <a href="<?php echo URLROOT; ?>/navires/add">
                <i class="fa-regular fa-plus"></i>
                </a>


              <!-- <a href="<?php echo URLROOT; ?>/pages/index1" class=" btn btn-primary ml-3">
                <i class="fa fa-home"></i>
              </a>                -->
  <table class="table">
        <thead>
          <tr>
            <th scope="col">nom du client</th>
            <th scope="col">nom de navire</th>
            <th scope="col">nombre de palces</th>
            <th scope="col">nombre de chambre</th>
            <th scope="col">supprimer</th>
          </tr>
        </thead>
        <tbody>



    <?php if ($data['navire']): foreach ($data['navire'] as $navire): ?>
			   <tr>
			      <th scope="row"><?php echo $navire->id; ?></th>
			      <td><?php echo $navire->nom; ?></td>
			      <td><?php echo $navire->nombre_place; ?></td>
			      <td><?php echo $navire->nombre_chambre; ?></td>
			      <td> <a class="btn btn-sm btn-warning"
			                        onclick="deletItem('<?php echo URLROOT ?>/navires/delete/<?php echo $navire->id ?>')"><i
			                          class="fa fa-trash"></i></a>

			                    </td>  </tr>
			    <?php endforeach;else: ?>
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