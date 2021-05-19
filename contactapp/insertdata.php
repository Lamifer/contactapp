<?php 
  include "./header.php";
  if(!isset($_SESSION['username'])){
    echo '<script>alert("Please Login to Add Contact.")</script>';
  }
?>
<div class="container">

<form action="addcontact.php" name="addcontact" method="POST">
         
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" name="firstname" placeholder="Firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" name="lastname" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="companyname">Company Name</label>
    <input type="text" class="form-control" id="comapny" name="company" placeholder="Company Name">
  </div>
  <div class="form-group col-md-6">
    <label for="owner">Owner</label>
    <input type="text" class="form-control" id="owner" name="owner" placeholder="Owner Name">
  </div>
  </div>
  
  <div class="form-group">
    <label for="workphone">Emal</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="workphone">Work Phone</label>
    <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone No.">
  </div>
  <?php
  if(isset($_SESSION['username'])){
    echo '<button type="submit" class="btn btn-primary">Add Contact</button>';
  }
  else{
    echo '<button type="submit" class="btn btn-primary" disabled>Add Contact</button>';
  }
  ?>
  
  
  </form>
</div>