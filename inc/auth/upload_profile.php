<?php

    session_start();

    require_once '../../inc/db.php';


    $id_student = $_SESSION['user_id_db'];
    $file = $_POST['img'];


    $sql = "SELECT * FROM user WHERE user_student_id = '$id_student'";
    $result = mysqli_query($conn, $sql);


    $filename = "../../img/profile_ul/" . "profile_img_". $_SESSION["user_id_db"] . ".png";
    $file_data = str_replace('data:image/png;base64,', '', $file);
    $file_data = base64_decode($file_data);

    // Save the image in a defined path

    file_put_contents($filename, $file_data);

    $link = "/app-practice/img/profile_ul/" . "profile_img_". $_SESSION["user_id_db"] . ".png";
    $sql = "UPDATE user SET user_img = '$link' WHERE ID = '$id_student'";
    $result = mysqli_query($conn, $sql);

    echo $data = true;


    

?>