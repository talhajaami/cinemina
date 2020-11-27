


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="sample.css" rel="stylesheet">
  </head>
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h2 class="my-0 mr-md-auto font-weight-normal fontt" >CINEMINA</h2>
      <img class="rounded mx-auto d-block logoo" src="logo.png" alt="">
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="home.html">Home</a>
        <a class="p-2 text-dark" href="login.html">Login</a>
        <a class="p-2 text-dark" href="#">Book Ticket</a>
        <a class="p-2 text-dark" href="aboutus.html">About Us</a>
      </nav>
      <a class="btn btn-outline-secondary" href="signup.php">Sign up</a>
    </div>
  </header>
<div>
<?php
  $error='';
  if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      $error = "Username of Password invalid";
    }
    else{
      $username = $_POST['username'];
      $password = $_POST['password'];

      $conn = mysqli_connect("localhost", "root", "");
      $db = mysqli_select_db($conn, "mydb");
      $query = mysqli_query($conn, "SELECT * FROM user WHERE password='$password' AND username='$username'");
      $rows = mysqli_num_rows($query);
      if($rows == 1){
        header("Location: bookticket.php"); // Redirecting to other page
        }
        else
        {
        $error = "Username of Password is Invalid";
        }
        mysqli_close($conn); // Closing connection
        }
       }
        
?>
</div>
<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    
                    <h1 class="display-4 py-2 text-truncate">Login</h1>
                    <br>
                    <div class="px-2">
                        
                        <form action="login.php" novalidate method="POST" class="justify-content-center">
                            
                            <div class="form-group">
                                <label class="sr-only">Username</label>
                                <input type="text" name="username" id="username" class="form-control text-center" style="border-radius: 24px;" placeholder="Username" required> 
                            </div>
                            
                            <div class="form-group">
                                <label class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control text-center" style="border-radius: 24px;" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <p>
                                    If you don't have account <a href="signup.php">Click here</a>
                                </p>
                            </div>
                            <button type="submit" name="submit" id="login" style="border-radius: 24px;" class="btn btn-outline-light btn-lg">Login</button>
                            <br><br>
                        </form>
                        <span><?php echo $error; ?></span>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script type="text/javascript">
	
    $("#login").click(function(){

        var username = $("#username").val();
        var password = $("#password").val();

        if(username == '' || password == ''){
            Swal.fire(
                'Fields Empty!',
                'Please check the missing field(s)!',
                'warning',
                'OK'
                );
        }else{
          location.href = "home.html";
        }
        
    });
	
</script>
</body>
</html>
