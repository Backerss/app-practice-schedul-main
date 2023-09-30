<?php


    session_start();

    require_once '../db.php';

    $full_name = $_POST['full_name'];
    $id_student = $_POST['id_student'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];


    $sql = "SELECT * FROM user WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) > 0){
            echo $data = false;
    }else{


        //encode password
        $password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO `user`(`user_student_id`, `user_name`, `user_email`, `user_password`, `user_sex`, `user_birthday`, `user_tel`) VALUES ('$id_student','$full_name','$email','$password','$sex','$birthday', '$tel')";
        $result = mysqli_query($conn, $sql);


        echo $data = true;



    }




?>