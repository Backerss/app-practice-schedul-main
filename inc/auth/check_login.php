<?php


    session_start();

    require_once '../db.php';
    

    $id_student = $_POST['id_student'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE user_student_id = '$id_student'";
    $result = mysqli_query($conn, $sql);


    $_SESSION["user_id_db"] = 0;


    if(mysqli_num_rows($result) > 0){


        $row = mysqli_fetch_assoc($result);


        //decode password
        $password_decode = password_verify($password, $row['user_password']);   


        if($password_decode)
        {
            
            $_SESSION["user_id_db"] = $row['ID'];
            echo $data = true;

        }
        else
        {
            echo $data = false;
        }


        
    }

?>