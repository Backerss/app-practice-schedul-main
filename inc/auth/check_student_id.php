<?php

    session_start();

    require_once '../db.php';


    $id = $_POST["c_check_id"];

    $user_id = $_SESSION['user_id_db'];


    $sql = "SELECT * FROM schedul WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if($row == null){
        echo $data = false;
        exit();
    }

    if($row["S_date"] != date("Y-m-d")){
        echo $data = "ไม่ใช่วันนี้";
        exit();
    }
    else if($row["S_time"] < date("H:i:s")){
        echo $data = "ยังไม่ถึงเวลา";
        exit();
    }


    $sql = "SELECT * FROM check_schedul WHERE c_check_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        
        $sql = "UPDATE `check_schedul` SET `c_check_status`='มา' WHERE c_check_id = '$id'";
        $result = mysqli_query($conn, $sql);
        echo $data = false;

    }
    else
    {

        $sql = "INSERT INTO `check_schedul`(`c_check_id`, `c_check_by`, `c_check_status`) VALUES ('$id','$user_id', 'มา')";
        $result = mysqli_query($conn, $sql);
        echo $data = true;
    }


?>