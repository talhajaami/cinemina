
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sessioonal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h2 class="my-0 mr-md-auto font-weight-normal fontt" >CINEMINA</h2>
        <img class="rounded mx-auto d-block logoo" src="logo.png" alt="">
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="home.html">Home</a>
          <a class="p-2 text-dark" href="aboutus.html">About Us</a>
        </nav>
        <?php
         if($_SESSION["username"]) { 
                ?>
 <?php echo $_SESSION["username"]; ?><a class="btn btn-outline-secondary" href="logout.php" tite="Logout">Logout</a>
<?php
}
?>
        <a  href="home.html">Logout</a>
      </div>
    </header>

   

    <footer class="text-muted bg-light">
      <div class="container">
        <p class="float-right colour">
          <img class="img1" src="download.jpg" alt=""><br>
          News<br>
            Events <br>
          Latest
        </p>
        <h3 class="colour">
            General
        </h3>
        <p class="colour" ><a class="colour" href="aboutus.html">About US</a><br>
        Contact Us <br>
      Term & Conditions</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
