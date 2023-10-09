<?php

    session_start();

    require_once '../inc/db.php';


    $id = $_GET["c_check_id"];


    if(!isset($id))
        header("Location: /app-practice/page/home.php");


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
                <div class="col-lg text-center">
                    <?php

                            $sql = "SELECT * FROM schedul WHERE ID = '$id'";
                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_assoc($result);
                    
                    ?>

                    <h3><?php echo $row["S_deteil"] ?></h3>
                    <h5><?php echo $row["S_date"] ?> : <?php echo $row["S_time"] ?></h5>
                    <input type="text" class="d-none" name="check_id" value="<?php echo $id ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อควรเช็คชื่อ</h5>
                            <p class="card-text">
                                <p>1.เช็คชื่อสายได้ไม่เกิน 30 นาที จากเวลาที่ตั้ง ถ้าเลยกำหนดไม่สามารถเช็คได้ </p>
                                <p>2.ระยะเช็คชื่อ ไม่เกิน 100 เมตร จากจุดเช็คชื่อ</p>
                                <p>3.ระบบมีการเก็บข้อมูลตำแหน่งไม่สามารถ เซฟ หรือ เช็คชื่อเกิน 100 เมตรได้</p>
                                <p>4.ถ้านักศึกษาเข้าเรียนไม่ได้ ให้แจ้งครูผู้สอน</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg mt-lg-2 mt-3">
                    <button class="btn btn-primary w-100" type="button" id="check_student_id" >CHECK</button>
                </div>
            </div>
        </div>
    </main>

</body>




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