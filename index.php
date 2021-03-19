<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid p-0">
      <!-- Introduction section -->
            
              <div class="text-center" >
                <img src="img/welcompic.jpg" class="img-fluid p-0" style="width:100%; height : 58vh;">
              </div>
            </div>

      <!-- Activity section -->
      <h2 class="text-center" style="background-color: #032F61; color:#FFC225; margin: 0;">ACTIVITY</h2>
            <div #activity class="row activity text-center bg-warning">
                  <div class="col-md act" style="background-color:#FFC225;">
                    <br>
                    <img src="img/new_user.png" class="img-fluid">
                    <br>
                    
                    <a href="createuser.php"><button style="background-color: #032F61;">NEW USER</button></a>
                  </div>
                  <div class="col-md act" >
                    <br>
                    <img src="img/transaction.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color: #032F61;">New Transaction</button></a>
                  </div>
                
                  <div class="col-md act" >
                    <br>
                    <img src="img/tr_history.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color: #032F61;">HISTORY</button></a>
                  </div>

            </div>
      </div>
      <footer class="text-center py-2" style="background-color:#1BABE2; ">
        <p style="color: brown">&copy2021 <br> <b><em>~SONU PANDEY</em></b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>