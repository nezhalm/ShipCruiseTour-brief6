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
  <link rel="stylesheet" href="<?php echo URLROOT; ?>../css/stat.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>../css/table.css">
  <!-- Google Fonts -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <?php require APPROOT . '/views/inc/navbar.php'; ?>

 
</head>

<body>
 

    <div class="video">
      <video autoplay muted loop>
        <source src="<?php echo URLROOT; ?>/img/video.mp4" type="video/mp4" />
      </video>
      <div class="text">
        <h2>our statistiques</h2>
        <p>you can veiw our statistique of all our products</p>
        <a href="">view all products</a>
      </div>
    </div>
    


    <div class="stats">
      <div class="container">
        <div class="box">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAYdJREFUWEfV1zEuRUEUxvH/WwGtisICaDWodLaAUiLBTugkGlYgOh0dJb3CElgBmeReGcedmXPOHMnz2juZ+d3vzJy5b8ac/WZz5uHfgdaAG2ClkeQZcBqRdi2hhLkHFpULXQEHyrHFYSWQFTMu0I2aAknMB7AFPBdeKyH2smddKAmyYvJkQlAS9AYsD6u0kpGBhSQlQZ/ZKuuVMpU2ZTeqBpLPloALYBN4Ao6A1wlZF8oCugV2M8ADsB290S2gd2BBAGp9zJWUBXQH7GSgR2Cj0QjNKAtoFbgcelLCHAIvis5sQllAirWLQ9SoGqir43pPnwSlW/s46hrwoKZOiTpeZw3l/OfAyThX6dj+NSq/opLl2xHeRxSpuRIKv8WHCSXmGtjPX0LzTR1VvibmR+2iO66YT4WxgNJYb1JqjBXkQZkwHpAFZcZ4QRqUC9MDqqHcmF7QFCp14Pxf7q8+02qcmj7UmkMmMo43YyISKnV0FyYSlJfPjYkGtUqreh6xh1QLaQfNHegLpANyJYzVXOkAAAAASUVORK5CYII=" />
          <div class="number"><?php echo $data['prix'] ?>   </div>
          <p>the maximum price</p>
        </div>
        <div class="box">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAALJJREFUWEftmFEKgEAIRGcvUnfoIB22g3SHukj9RPiRuKmwCvYVSPmYWceoIdjVgvGggIgjF7l/hRmpUAFJ82JSaAGwSh2E+gZg9zpDB4DJCHQCmL2AqLwWLjpEJssKSLKhFEqnULixDxeMkqWauimHNA2lZ7qAPKzhQFS7zOPwckCqXeYVgBzU711WQI+U7Dd1KZROoXBjHy4Ypbj3rHetDs+G0rsKKJ1Cn8Aj/37kALoBnOo6JV21qpkAAAAASUVORK5CYII="/>        
          <div class="number"><?php echo $data['prixmin'] ?>   </div>
          <p>the minimum price</p>
        </div>
        <div class="box">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAThJREFUWEftl+1twkAMhp9M0I7QbtAN6AZ0BSYoGxQmoCN0BNgAJoAROkKZgOpFpygJd3EcKSGtzn+iKD7ryesPnQsmZsXEePjzQC/ABnjtqOwWWAOnjv4uhZ6AI/DYNXjw+wGeAT1N86RsGdQxg0YcFsBXl4MeoBXwEYIqDXpvM6//NVYGstIWU+gTmAMq4iHtO9SV0l9aE0gw70NSRGLX6rEJpNZ8GBlISmksRIv6MjLMDUdToQzUzJRHoWrxVYdeKsse/5IjAyXkTCp0pyZLD0bVRqrTDsA+HNV9aGbQe/zLaZ1ryFtDbYNR6aqmzLrGevx7tf2QBZ+BLHWzQv9HIbWqNYGtv/V+3wFvqRujVmVBjXWNPYe1vFy1Y1uHVmURj7F1aPevrdieRdGbil7+GciSbXIK/QKlZ1AlnJMGXQAAAABJRU5ErkJggg=="/>       
           <div class="number"><?php echo $data['prixsomme'] ?>   </div>
          <p>the somme of prices</p>
        </div>
        <div class="box">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAcNJREFUWEftl+ExBEEQhb+LgBCEQARkgAiQAREgAkSACBABl4EMkAEZqFe1ezVWz/RM75a6Ktu/dvdmZ759/aZ7bsGaxWLNeJiBvIz8C4X2gCNgq1PjHXgFngBdF2NKhQRwCwjIik/gArgpEU0FtA08A5ueAsAjcJgbNwWQBXPfLSxVBHkK7CYQZ8C1BTUWaAjzBRwAL8ZiStd591ygO5anxgBZMPKPDJwLgfZKmSpFgSIwgjzujK9rpVX3PyICFIXRwlJQ5lcsrR3ZCmQZWF4opSlVQP566B6oLuk+rFBua98BJxXbXUM0VkVTcdnVpRCQV2dqoNJ0CcJUtiZlHkz/hSWo4RxmujSRB1QLU4IazvEB6Jlq0a8oAanCvlW2g3TiVKnmHVkCUs/ZrzTrcJig1ETT/qYq7hXObMqGBgxyrV6rgil5KO07fwZTAhqTrvQDqpXpX8p5KG2CUYWaYUoKpRU1AhSCKQHpQHUVIQHCMCUgnY/VMDcaoUbBeJW6VaXRMB6Qfq/dbZPA1ABpjJRSXcqlTwctnWvM3tSYcre59vPJU1pUvan/AyiPSUHrQN/KsRrvdfvwxNEXZyBPuVkhT6FvCCJjJaxqEVQAAAAASUVORK5CYII=" />
          <div class="number"><?php echo $data['nb'] ?></div>
          <p>number of products</p>
        </div>
       
      </div>
    </div>





    <table style="display: none;">


    <div style="display: none;"class="filter">

</div>

<tr>

<th>#</th>

<th>Nom</th>

<th>Prenom</th>

<th>identifiant </th>

<th>date de naissance </th>

<th>salaire</th>

</tr>


 <tr>

<td>1</td>

<td>Jean</td>

<td>leBon</td>

<td>1368</td>

<td>18 Nov 1962</td>

<td>5000$</td>

</tr>

<tr>

<td>2</td>

<td>jack</td>

<td>Duppont</td>

<td>1368</td>

<td>18 Dec 1962</td>

<td>2000$</td>

</tr>

<tr>

<td>3</td>

<td>Jean</td>

<td>leBon</td>

<td>1368</td>

<td>18 Nov 1972</td>

<td>4200$</td>

</tr>

<tr>

<td>4</td>

<td>Nadia</td>

<td>leBon</td>

<td>1368</td>

<td>18 Mar 1982</td>

<td>6300$</td>

</tr>

<tr>

<td>5</td>

<td>Nadia</td>

<td>leBon</td>

<td>1368</td>

<td>18 Mar 1982</td>

<td>6300$</td>

</tr>

<tr>

<td>6</td>

<td>Nadia</td>

<td>leBon</td>

<td>1368</td>

<td>18 Mar 1982</td>

<td>6300$</td>

</tr>

<tr>

<td>7</td>

<td>Nadia</td>

<td>leBon</td>

<td>1368</td>

<td>18 Mar 1982</td>

<td>6300$</td>

</tr>

<tr>

<td>8</td>

<td>Nadia</td>

<td>leBon</td>

<td>1368</td>

<td>18 Mar 1982</td>

<td>6300$</td>

</tr>

</table>




  


    <footer style="padding-top: -20px;" class="text-center text-lg-start bg-white text-muted">

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
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Nezha lemnissir</a>
      </div>
      <!-- Copyright -->
      <section>

    
      </section>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="design/js/main.js"></script>
</body>

</html>