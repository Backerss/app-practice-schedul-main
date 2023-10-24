<?php

    session_start();
    include_once '../db.php';

    $edit_id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_id_student = $_POST['edit_id_student'];
    $edit_email = $_POST['edit_email'];
    $edit_tel = $_POST['edit_tel'];
    $edit_birthday = $_POST['edit_birthday'];
    $edit_role = $_POST['edit_role'];
    $edit_id_student = $_POST['edit_id_student'];
    $edit_password = $_POST['edit_password'];
    $edit_status = $_POST['edit_status'];
    $edit_note = $_POST['edit_note'];


    $sql = "SELECT * FROM user WHERE ID = '$edit_id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        
        if($edit_password != ""){
            $edit_password = password_hash($edit_password, PASSWORD_DEFAULT);
            $sql = "UPDATE `user` SET `user_name`='$edit_name',`user_student_id`='$edit_id_student',`user_email`='$edit_email',`user_tel`='$edit_tel',`user_birthday`='$edit_birthday',`user_role`='$edit_role',`user_student_id`='$edit_id_student',`user_password`='$edit_password',`user_status`='$edit_status',`user_note`='$edit_note' WHERE ID = '$edit_id'";
            $result = mysqli_query($conn, $sql);
            echo $data = true;
        }
        else{
            $sql = "UPDATE `user` SET `user_name`='$edit_name',`user_student_id`='$edit_id_student',`user_email`='$edit_email',`user_tel`='$edit_tel',`user_birthday`='$edit_birthday',`user_role`='$edit_role',`user_student_id`='$edit_id_student',`user_status`='$edit_status',`user_note`='$edit_note' WHERE ID = '$edit_id'";
            $result = mysqli_query($conn, $sql);
            echo $data = true;
        }
    }else{
        echo $data = false;
    }





?>