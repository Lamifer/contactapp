<?php require_once "./connect.php" ?>

<?php include "./header.php" ?>
  
  <div class="container table-responsive">
		<table class="table table-striped center" border="1">
			<th>S.No.</th><th>First Name</th><th>Last Name</th><th>Company Name</th><th>Work Phone</th><th>Email Address</th><th>Owner</th>

      <?php 
				$sql = "SELECT * FROM contactlist";
				$result = mysqli_query($conn,$sql);

				$sno = 1;
				if(mysqli_num_rows($result)>0){				
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr><td>".$sno++."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['company']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['owner']."</td></tr>";
  				}
        }
      
      ?>
		</table>
  </div>
</body>
</html>