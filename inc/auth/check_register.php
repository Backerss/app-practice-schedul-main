<?php


    session_start();

    require_once '../db.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $id_student = $_POST['id_student'];
    $birthday = $_POST['birth_date'];


    $sql = "SELECT * FROM user WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) > 0){
            echo $data = false;
    }else{


        //encode password
        $password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO `user`(`user_student_id`, `user_name`, `user_email`, `user_password`, `user_sex`, `user_birthday`) VALUES ('$id_student','$full_name','$email','$password','$sex','$birthday')";
        $result = mysqli_query($conn, $sql);


        echo $data = true;



    }




?>