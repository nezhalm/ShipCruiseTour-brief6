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


  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
  <title><?php echo SITENAME; ?></title>


</head>

<body>


  <?php
  // session_start();

  require APPROOT . '/views/inc/navbar.php';
  ?>
  


  <div class="container ">

    <div class="row mt-4">

      <div class="col-md-10 mx-auto">

        <div class="card">
        <?php flash1('register_danger'); ?>

        <?php flash('register_success'); ?>
          <div data-aos="fade-down-right" class="card-body bg-light">
         



            <a href="<?php echo URLROOT; ?>/pages/index1" class = " btn btn-primary ml-3">
              <i class="fa fa-home"></i>
            </a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id croisier</th>
                  <th scope="col">date de depart</th>
                  <th scope="col">prix de reservation</th>
                  <th scope="col">type de chambre</th>
                  <th scope="col">image</th>
                  <th scope="col">annuler la reservation</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($data['res'] as $reservation) : ?>

                  <tr>
                    <td><?php echo $reservation->idcroi; ?></td>
                    <td><?php echo $reservation->reservation_date; ?></td>
                    <td><?php echo $reservation->prix_reservation . " $"; ?></td>
                    <td name="room"><?php echo $reservation->chambre_nom; ?></td>
  <td><img src="<?php echo URLROOT.'/img/'.$reservation->img; ?>" width="80px" height="80px"></td>
                    <td>
                      <a class="btn btn-sm btn-danger" href="<?php echo URLROOT ?>/reservations/deleteres/<?php echo $reservation->idre ?>">annuler la reservation</a>
                    </td>
                  </tr>
                <?php endforeach; ?>



              </tbody>

            </table>












            </table>
          </div>
        </div>
      </div>

    </div>

  </div>
</body>