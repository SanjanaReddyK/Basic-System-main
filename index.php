<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <!-- Fontawesome tags -->
    <script src="https://kit.fontawesome.com/63a64c392b.js" crossorigin="anonymous"></script>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : black;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>INDIAN BANK
                       <h6>it leads your way........<h6>
                  <h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.jpg" class="img-fluid pt-2" style="width : 40%">
              </div>
            </div>

      <!-- Activity section -->
      <div class="row activity text-center">
                  <div class="col-md act">
                  <br> <br>
                  <i class="far fa-user fa-7x"></i>
                    <br> <br> 
                    <a href="createuser.php"><button style="background-color : green;">CREATE A USER</button></a>
                  </div>
                  <div class="col-md act">
                  <br> <br>
                  <i class="fas fa-dollar-sign fa-7x"></i>
                  <br> <br>
                    <a href="transfermoney.php"><button style="background-color : green;">MAKE A TRANSACTION</button></a>
                  </div>
                  <div class="col-md act">
                  <br> <br>
                  <i class="fas fa-history fa-7x"></i>
                  <br> <br>
                    <a href="transactionhistory.php"><button style="background-color : green;">TRANSACTION HISTORY</button></a>
                  </div>
            </div>
      </div>
      <br><br>
    <footer id=footerr class="text-center" style="background-color : black; padding: 40px 15%;">
    <i class="social-media fab fa-twitter"></i>
    <i class="social-media fab fa-facebook"></i>
    <i class="social-media fab fa-instagram"></i>
    <i class="social-media fas fa-envelope"></i>
     <br>
    <h6>© Copyright 2021 INDIAN BANK
    <br>
    for further queries
    <br> 
    contact : 0123456789
    <br>
    By Sanjana Reddy
    <br>
    Web development Intern, The Spark Foundation
    </h6>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>