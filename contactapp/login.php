<?php
    require_once "./connect.php";
    session_start();

    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
        $login = "SELECT * FROM users WHERE username='".$_POST['username']."'";
        $pass = mysqli_query($conn,$login);
        if($pass){
            if(mysqli_num_rows($pass)>0){
                while($row = mysqli_fetch_assoc($pass)){
                    if($row['password']==$_POST['password']){
                        $_SESSION['msg'] ="Login Successful";
                        session_start();
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['msg'] = "Login Success";
                        echo '<script>window.location.href = "./index.php";</script>';
                    }else{
                    $_SESSION['msg']= "Worng username or password. Please try again.";
                    header("Location: index.php");
                }
                }
            }

        }
    }
    else{
        $_SESSION['msg'] = "Please enter correct username and password";
        header("Location: index.php");
    }

?>