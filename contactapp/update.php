<?php 
    include "./connect.php";
    
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $cname = $_POST['company'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $owner = $_POST['owner'];
        echo $lname;
        $update_query = "UPDATE contactlist SET firstname='$fname', lastname='$lname', email='$email',
                phone='$phone', company='$cname', owner='$owner' WHERE id='$id'";
        
        $update_result = mysqli_query($conn,$update_query);
        if($update_result){
            echo "Updte success";
            session_start();
            $_SESSION['msg']="Update Success.";
            $update_message = $_SESSION['msg'];
            header("Location: index.php");
            exit();

        }

    }
    include "./header.php";
    if(!isset($_SESSION['username'])){
        echo '<script>alert("Please Login to Edit or Delete Contact.")</script>';
    }
?>
<div class="container table-responsive">
	<table class="table table-striped center" border="1">
	<th>S.No.</th><th>First Name</th><th>Last Name</th><th>Company Name</th><th>Work Phone</th><th>Email Address</th><th>Owner</th><th colspan='2'>Update or Delete</th>
    <?php
        $sql = "SELECT * FROM contactlist";
	    $sql_result = mysqli_query($conn,$sql);
        $sno = 1;
	    if(mysqli_num_rows($sql_result)>0){				
	        while($row = mysqli_fetch_assoc($sql_result)){
                echo "<tr><td>".$sno++."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['company']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['owner']."</td>";
                if(isset($_SESSION['username'])){
                    echo "<td><button type='submit' class='btn btn-primary '><a href='./update_single.php?id={$row['id']}'>Edit</a></button></td>";
                    echo "<td><button type='submit' class='btn btn-danger btn-sm'><a href='./delete.php?id={$row['id']}'>Delete</a></button></td>";
                }
                else{
                    echo '<td><button type="submit" class="btn btn-primary btn-sm" disabled>Edit</button></td>';
                    echo '<td><button type="submit" class="btn btn-danger btn-sm" disabled>Delete</button></td></tr>';
                }
            
  	    	}
        }
    ?>
    </table>
</div>