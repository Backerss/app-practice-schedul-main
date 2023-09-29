<?php

    session_start();
    include_once 'db.php';


    $full_name = $_POST['full_name'];
    $id_student = $_POST['id_student'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM user_practice WHERE user_id_card = '$id_student'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
        echo $data['success'] = false;

    
    echo $data['success'] = true;
        



?>