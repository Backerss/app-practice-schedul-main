<?php


    session_start();
    require_once '../../inc/db.php';


    $type = $_POST['type'];

    if($type == "add"){

        $date_start = $_POST['date_start'];
        $time_start = $_POST['time_start'];
        $time_end = $_POST['time_end'];
        $s_deteil = $_POST['s_deteil'];
        $s_note = $_POST['s_note'];

        $sql = "SELECT * FROM schedul";
        $result = mysqli_query($conn, $sql);
        

        //check date and time if have in database
        while($row = mysqli_fetch_assoc($result)){
            if($row["S_date"] == $_POST['date_start']){
                if($row["S_time"] == $_POST['time_start']){
                    echo $data = "date and time have in database";
                    exit();
                }
            }
        }


        $sql = "SELECT * FROM user WHERE ID = '".$_SESSION['user_id_db']."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $s_owner = $row["ID"];

        if($row["user_role"] == "Admin"){
            $sql = "INSERT INTO `schedul`(`S_date`, `S_time`, `S_endtime`, `S_deteil`, `S_note`, `S_owner`) VALUES ('$date_start','$time_start','$time_end', '$s_deteil', '$s_note', '$s_owner')";
            $result = mysqli_query($conn, $sql);
            echo $data = true;
        }
        else{
            echo $data = "not admin";
        }
    }






?>