<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="style.css">

    <title>Contact App</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">Contact App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./insertdata.php">Add Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./update.php">Update Or Delete Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
      if(isset($_SESSION['username'])){
        echo '<span class="navbar-text">Welcome '.$_SESSION['username'].'</span>';
        echo '<a class="btn btn-primary" href="./logout.php">Logout</a>';
      }
      else{
        echo '<a class="btn btn-primary" href="./signup_login.php">Login/Signup</a>';
      }
      ?>
    </form>
  </div>
</nav>

<h1 class="container text-center display-3">Welcome to Contact App</h1>
<?php
$update_message="";
if(isset($_SESSION['msg'])){
  $update_message = $_SESSION['msg'];
        echo "<div class='container alert alert-info alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>$update_message</strong></div>";
        unset($_SESSION['msg']);
    }
?>