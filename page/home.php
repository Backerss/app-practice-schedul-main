<?php

    session_start();

    require_once '../inc/db.php';

    if(!isset($_SESSION['user_id_db']))
      header("Location: ../../index.php");

    

    $sql = "SELECT * FROM user WHERE ID = '".$_SESSION['user_id_db']."'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if($row["user_img"] == "None")
        $row["user_img"] = "../assets/avatars/user_profile_none.png";



    //get date
    $date = date("Y-m-d");

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="../assets/css/simplebar.css">
    <!-- Awesome ICON -->
    <link href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.min.css" rel="stylesheet">
    <!-- Font SF PRO DISPLAY (APPLE) -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=98774,98773,98775,98770,98771,98769"
        rel="stylesheet">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../assets/css/feather.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="../assets/css/daterangepicker.css">
    <!-- App CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../assets/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="../assets/css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="../assets/css/custom.css">
    <title>Home</title>
</head>

<body class="vertical light">

    <?php include '../inc/inc/header.php'; ?>
    <?php include '../inc/inc/sidebar.php'; ?>


    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa-sharp fa-solid fa-folder-magnifying-glass"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="คนห้า" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <hr>
            <h5 class="d-inline">วันที่: <?php echo $date ?> : <p class="d-inline" id="_gettime"></p>
            </h5>
            <div class="row">

                <?php
                $sql = "SELECT * FROM schedul ORDER BY S_date, S_time";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $row["S_date"] = date("Y-m-d", strtotime($row["S_date"]));

                    if ($row["S_date"] < $date) {
                        continue;
                    }

                    // Sort date time
                    $row["S_time"] = date("H:i", strtotime($row["S_time"]));
                    $row["S_endtime"] = date("H:i", strtotime($row["S_endtime"]));
                    $row["S_date"] = date("d/m/Y", strtotime($row["S_date"]));
                ?>
                <!-- Your HTML/PHP code for displaying the sorted data -->
                <div class="col-12 mt-2">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#card-view-s">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["S_deteil"] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $row["S_date"] ?>
                                <?php echo $row["S_time"] ?></h6>
                            <p class="card-text"><?php echo $row["S_note"] ?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
            ?>

            </div>

        </div>
    </main>

</body>


<div class="modal fade" id="card-view-s" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ตารางซ้อม</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg">
                        <h5 name="s_name"></h5>
                        <p name="s_date" class="d-inline"></p>
                        <p class="d-inline" name="s_time"></p>
                        <hr>
                        <p name="s_note"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="check-class" class="btn btn-primary">CHECK</button>
            </div>
        </div>
    </div>
</div>




<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/simplebar.min.js"></script>
<script src='../assets/js/daterangepicker.js'></script>
<script src='../assets/js/jquery.stickOnScroll.js'></script>
<script src="../assets/js/tinycolor-min.js"></script>
<script src="../assets/js/config.js"></script>
<script src="../assets/js/apps.js"></script>
<script src='../assets/js/jquery.dataTables.min.js'></script>
<script src='../assets/js/dataTables.bootstrap4.min.js'></script>
<script src='../js/main.js'></script>

</html>