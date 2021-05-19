<?php 
    require_once "./connect.php";
    session_start();

    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password1']) && !empty($_POST['password1'] && ($_POST['password1']==$_POST['password2']))) {
        
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			username VARCHAR(30) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(25) NOT NULL)";
        
            if(mysqli_query($conn,$sql)){
            // echo "Table Created Successfully";

            $userexist = "SELECT password FROM users WHERE username ='".$_POST['username']."'";
            $no_rows = mysqli_query($conn,$userexist);

            if(mysqli_num_rows($no_rows)>0){
                $_SESSION['msg']= "Username Already Exists. Please Login or create a new One.";
            }
            else{
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password1'];

                $insert_user = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
                if(mysqli_query($conn,$insert_user)){
                    $_SESSION['msg']= "Registration Successful. Please Login to add Contacts.";
                }
            }
        }    
    }
    header("Location: index.php");




?>

