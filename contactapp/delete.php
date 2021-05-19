<?php
    include "./connect.php";

    $id = $_GET['id'];

    $delete_query = "DELETE FROM contactlist WHERE id = '$id'";

    $delete_result = mysqli_query($conn,$delete_query);

    if($delete_result){
        echo "Delted Success";
        session_start();
        $_SESSION['msg'] = "Contact Deleted Successfully";
        header("Location: index.php");
    }


?>