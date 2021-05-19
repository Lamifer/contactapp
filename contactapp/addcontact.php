<?php

    include "./connect.php";
    session_start();

    if(isset($_POST['firstname']) && !empty($_POST['lastname']) && isset($_POST['lastname']) 
        && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['phone']) 
        && !empty($_POST['phone']) && isset($_POST['company']) && !empty($_POST['company'])
        && isset($_POST['owner']) && !empty($_POST['owner']))
        {

            $contacts_table = "CREATE TABLE IF NOT EXISTS contactlist (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone INT(10) NOT NULL,
                company VARCHAR(30) NOT NULL,
                owner VARCHAR(30) NOT NULL
                )";
       

        if(mysqli_query($conn,$contacts_table)){
            // echo " Table Created Successfully";
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $company = $_POST['company'];
            $owner = $_POST['owner'];

            $insert_query = "INSERT INTO contactlist (firstname,lastname,email,phone,company,owner) 
                        VALUES ('$firstname','$lastname','$email','$phone','$company','$owner')";
            if(mysqli_query($conn,$insert_query)){
                session_start();
                $_SESSION['msg'] = "Data inserted successfully";
                
            }else{
                $_SESSION['msg'] = "Data not inserted successfully.Please try again";
            }
        }
    }
    else{
        $_SESSION['msg'] = "Please fill all the columns";
    }
    header("Location: index.php");


?>