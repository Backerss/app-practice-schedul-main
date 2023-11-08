<?php

    session_start();

    require_once '../db.php';


    $id = $_POST["id"];
    $status = $_POST["status"];
    $id_url = $_POST["id_url"];


    $sql = "SELECT * FROM user WHERE user_student_id = '$id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $user_id = $row["ID"];

    if($row == null){
        echo $data = false;
        exit();
    }



    $sql = "SELECT * FROM check_schedul WHERE c_check_id = '$id_url' AND c_check_by = '$user_id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        
        $sql = "UPDATE `check_schedul` SET `c_check_status`='$status' WHERE c_check_id = '$id_url' AND c_check_by = '$user_id'";
        $result = mysqli_query($conn, $sql);
        echo $data = true;

    }
    else
    {

        $sql = "INSERT INTO `check_schedul`(`c_check_id`, `c_check_by`, `c_check_status`) VALUES ('$id_url','$user_id', '$status')";
        $result = mysqli_query($conn, $sql);
        echo $data = true;
    }

    

?>