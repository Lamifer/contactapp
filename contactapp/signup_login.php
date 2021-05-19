<?php
  include "./header.php";
?>
<div class="container box">
  <div class="row">
    <div class="col-md-6 box1">
      <h1>Sign Up</h1>
      <form action="signup.php" name="signup" onsubmit="return validate()" method="POST">
        <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
        <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
        <input type="password" class="form-control form-control-lg" name="password1" placeholder="Password">
        <input type="password" class="form-control form-control-lg" name="password2" placeholder="Confirm Password">
        <input type="checkbox" id="checkbox" name="tnc"><label>By Clicking register you're agree to our policy & terms.</label>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
    
    <div class="col-md-6 box2">
      <h1>Sign in</h1>
        <form action="login.php" name="signin" onsubmit="return login()" method="POST">
          <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
          <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
          <button type="submit" class="btn btn-light">Sign in</button>
        </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="index.js"></script>
