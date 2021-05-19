<?php
$idno = $_GET['id'];
$r=5;
echo "the number is $idno";
?>

<?php
    include "./connect.php";
    include "./header.php";
    $idno = $_GET['id'];

    $data_edit = "SELECT * FROM contactlist WHERE id={$idno}";
    $record = mysqli_query($conn,$data_edit);

	if (mysqli_num_rows($record) == 1 ) {
	    $n = mysqli_fetch_assoc($record);
		$fname = $n['firstname'];
		$lname = $n['lastname'];
		$cname = $n['company'];
		$phone = $n['phone'];
		$email = $n['email'];
        $owner = $n['owner'];
        $id = $idno;
        echo '<div class="container">';
        echo '<form action="./update.php" name="addcontact" method="POST">';
        echo '  <div class="form-row">';
        echo '    <div class="form-group col-md-6">';
        echo '      <label for="firstname">First Name</label>';
        echo "      <input type='text' class='form-control' name='fname' value='$fname'>";
        echo '    </div>';
        echo '    <div class="form-group col-md-6">';
        echo '      <label for="lastname">Last Name</label>';
        echo "      <input type='text' class='form-control' name='lname' value='$lname'>";
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="form-row">';
        echo '  <div class="form-group col-md-6">';
        echo '    <label for="companyname">Company Name</label>';
        echo "      <input type='text' class='form-control' name='company' value='$cname'>";
        echo '  </div>';
        echo '  <div class="form-group col-md-6">';
        echo '    <label for="owner">Owner</label>';
        echo "      <input type='text' class='form-control' name='owner' value='$owner'>";
        echo '  </div>';
        echo '  </div>';
        echo '  <div class="form-group">';
        echo '    <label for="workphone">Email</label>';
        echo "      <input type='text' class='form-control' name='email' value='$email'>";
        echo '  </div>';
        echo '  <div class="form-group">';
        echo '    <label for="workphone">Work Phone</label>';
        echo "      <input type='text' class='form-control' name='phone' value='$phone'>";
        echo '  </div>';
        echo '  <div class="form-group">';
        echo "      <input type='hidden' class='form-control' name='id' value='$id'>";
        echo '  </div>';

            if(isset($_SESSION['username'])){
                echo '<button type="submit" class="btn btn-primary">Update details</button>';
            }
            else{
                echo '<button type="submit" class="btn btn-primary" disabled>Update details</button>';
            }
        
        echo '</form></div>';
    }

  
  if(!isset($_SESSION['username'])){
    echo '<script>alert("Please Login to Add Contact.")</script>';
  }
?>
